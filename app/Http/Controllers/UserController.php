<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

use Illuminate\Http\Request;
use App\Http\Requests\Users\StoreRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('posts')->get();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreRequest $request)
    {

        $data = Arr::except($request->all(), ['_token','avatar']);

        $data['avatar'] = $request->file('avatar')->store('avatars','public');
        $data['address'] = 'Ha Noi';
        $data['password'] = bcrypt($data['password']);


        $user = User::create($data);

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users.show', [
            'userData' => $user,
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
