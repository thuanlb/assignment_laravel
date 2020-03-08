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
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                <td> <img src="../storage/{{$post->image}}" alt=""></td>
                    <td><input name="title" type="text" value="{{ $post->title }}"></td>
                    <td>
                        <select name="category_id" >
                            @foreach ($categories as $item)
                        <option @if($post->category_id == $item->id)  selected  @endif </option> {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                <td>Noi Dung<textarea name="content" id="" cols="80" rows="10">{{ $post->content }}</textarea></td>
                </tr>

            </tbody>
        </table>
    </form>
    </div>
</div>




@endsection
