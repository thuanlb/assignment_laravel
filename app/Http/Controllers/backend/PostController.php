<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddUsersRequest;
use App\Models\{Post,Category};
use Arr;
use Auth;
class PostController extends Controller
{
    public function index(){
        $data['posts']=Post::orderBy('id','desc')->get();
        return view('backend.post.ListPost',$data);
    }


    public function create(){
        $data['categories']=Category::all();
        return view('backend.post.AddPost',$data);
    }


    public function store(Request $request){
        $data=Arr::except($request->all(),['_token']);
        $data['image']=$request->file('image')->store('avatars','public');
        $data['user_id']=Auth::User()->id;
        Post::create($data);
        return redirect()->back()->with('thongbao','Thêm thành công');

    }

    public function show($id){
        $data['post']=Post::find($id);
        $data['categories']=Category::all();
        return view('backend.post.ShowPost',$data);
    }

    public function destroy($id){
        Post::destroy($id);
        return redirect()->back();
    }

    public function edit($id){
        $data['post']=Post::find($id);
        $data['categories']=Category::all();
        return view('backend.post.EditPost',$data);
    }


    public function update(Request $request,$id){
        $post=Post::find($id);
        $data = Arr::except($request, ['_token','_method'])->toarray();
        if ($request->hasFile('image')) {
            $data['image']=$request->file('image')->store('images','public');
        }else{
            $data['image']=$post->image;
        }
        $post->update($data);
        return redirect()->back()->with('thongbao','Sửa thành công');

    }



























}
