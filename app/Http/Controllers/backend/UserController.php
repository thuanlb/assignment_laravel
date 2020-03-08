<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddUsersRequest;
use App\Models\User;
use Arr;
class UserController extends Controller
{



    public function index()
    {
        $users = User::orderBy('id','desc')->get();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(AddUsersRequest $request)
    {
        $data = Arr::except($request, ['_token'])->toarray();
        $data['password'] = bcrypt($data['password']);
        $data['is_active'] =1;
        $data['role'] =1;
        $user = User::create($data);
        return redirect()->back()->with('thongbao','Thành công');
    }

    public function show(User $user)
    {
        return view('users.show', [
            'userData' => $user,
        ]);
    }

    public function edit($id)
    {
        $data['userData']=User::find($id);
        return view('users.ShowEdit',$data);
    }

    public function update(Request $request,$id)
    {
        $user=User::find($id);
        $data = Arr::except($request, ['_token','_method'])->toarray();
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
















}
