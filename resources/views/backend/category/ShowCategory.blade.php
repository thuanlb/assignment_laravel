@extends('layouts')


@section('contents')


<div class="row" style="margin-left:300px">
    <div class="col-11 table-responsive ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Người Tạo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><input name="name" type="text" value="{{ $category->name }}" ></td>
                    <td><input type="text" value="{{ $category->ShowNamaUser['name'] }}"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>




@endsection

