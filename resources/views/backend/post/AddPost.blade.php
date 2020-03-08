@extends('layouts')


@section('contents')


<div class="row" style="margin-left:300px">
    <div class="col-11 table-responsive ">
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>@if(session('thongbao')) {{session('thongbao')}} @endif</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Hình Ảnh</th>
                    <th>Tiêu Đề</th>
                    <th>Danh Mục</th>
                    <th>Nội Dung</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><input name="image"  type="file"></td>
                    <td><input name="title" type="text"></td>
                    <td>
                        <select name="category_id" >
                            @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td><textarea name="content" id="" cols="50" rows="3"></textarea></td>
                </tr>

            </tbody>
        </table>
        <button type="submit"  class="btn btn-success">Thêm</button>
    </form>
    </div>
</div>




@endsection
