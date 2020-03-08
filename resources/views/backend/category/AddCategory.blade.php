@extends('layouts')


@section('contents')


<div class="row" style="margin-left:300px">
    <div class="col-11 table-responsive ">
        <h2>@if(session('thongbao')) {{session('thongbao') }} @endif</h2>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input name="name" type="text"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" >Thêm</button>
            </form>
    </div>
</div>




@endsection

