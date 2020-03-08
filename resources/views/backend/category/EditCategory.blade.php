@extends('layouts')


@section('contents')


<div class="row" style="margin-left:300px">
    <div class="col-11 table-responsive ">
        <h2>@if(session('thongbao')) {{session('thongbao') }} @endif</h2>
        <form action="{{ route('category.update',$category->id) }}" method="POST">
            @csrf
            @method('PUT')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Người tạo</th>
                </tr>
            </thead>
            <tbody>
                {{-- không cho sửa người tạo --}}
                <tr>
                <td><input name="name" type="text" value="{{ $category->name}}"></td>
                <td><input readonly type="text" value="{{ $category->ShowNameUser['name'] }}"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" >Lưu Sửa</button>
            </form>
    </div>
</div>




@endsection

