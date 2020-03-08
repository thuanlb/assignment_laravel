<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post,Category};
use Arr;
use Auth;
class CategoryController extends Controller
{
    public function index(){
        $data['categories']=Category::orderBy('id','desc')->get();
        return view('backend.category.ListCategory',$data);
    }


    public function create(){
        return view('backend.category.AddCategory');
    }

    public function store(Request $request){
        $data=Arr::except($request->all(),['_token']);
        $data['user_id']=Auth::User()->id;
        Category::create($data);
        return redirect()->back()->with('thongbao','thêm thành công');
    }

    public function show($id){
        $data['category']=Category::find($id);
        return view('backend.category.ShowCategory',$data);
    }


    public function edit($id){
        $data['category']=Category::find($id);
        return view('backend.category.EditCategory',$data);
    }

    public function update(Request $request,$id){
        $category=Category::find($id);
        $data=Arr::except($request->all(),['_token','_method']);
        $category->update($data);
        return redirect()->back()->with('thongbao','Sửa thành công');
    }


    public function destroy($id){
    Category::destroy($id);
    return redirect()->back();
    }




















}
