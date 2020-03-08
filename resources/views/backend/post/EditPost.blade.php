@extends('layouts')


@section('contents')


<div class="row" style="margin-left:300px">
    <div class="col-12 table-responsive ">
    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>@if(session('thongbao')) {{session('thongbao')}} @endif</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Hình Ảnh</th>
                    <th></th>
                    <th></th>
                    <th>Tiêu Đề</th>
                    <th>Danh Mục</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><img src="../../storage/{{$post->image}}" alt="" width="90px" height="90px"></td>
                <td>Chọn Ảnh Mới(nếu k chọn xẽ tự động chọn ảnh cũ )<input type="file" name="image"></td>
                <td></td>
                    <td><input name="title" type="text" value="{{ $post->title }}"></td>
                    <td>
                        <select name="category_id" >
                            @foreach ($categories as $item)
                        <option value="{{$item->id}}" @if($post->category_id == $item->id)  selected  @endif </option> {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                <td>Nội dung<textarea name="content" id="" cols="50" rows="10">{{ $post->content }}</textarea></td>
                <input type="hidden" name="user_id" value="{{$post->user_id}}">
                </tr>



            </tbody>
        </table>
        <button class="btn btn-success"> Lưu</button>
    </form>
    </div>
</div>




@endsection
