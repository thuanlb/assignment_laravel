@extends('layouts')


@section('contents')

<form style="text-align:center" action="{{ route('users.update',$userData->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p style="text-align:center">Name: <input type="text" name="name" value="{{ $userData->name }}"></p>
    <p style="text-align:center">Email: <input type="text" name="email" value="{{ $userData->email }}"></p>
    <p style="text-align:center">phone: <input type="text" name="phone" value="{{ $userData->phone }}"></p>
    <p style="text-align:center">Ngày sinh: <input type="date" name="date_of_birth" value="{{ $userData->date_of_birth }}"></p>
    <div class="form-group">
        <label class="control-label">chuc vu</label>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" value="1" type="radio" name="role" @if($userData->role == 1)
                checked @endif >User
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" value="2" type="radio" name="role" @if($userData->role == 2)
                checked @endif >Admin
            </label>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label">trang thai</label>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" value="1" type="radio" name="is_active" @if($userData->is_active == 1)
                checked @endif >hoat dong
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" value="0" type="radio" name="is_active" @if($userData->is_active == 0)
                checked @endif >Không hoat dong
            </label>
        </div>
    </div>
    <button type="submit"> Lưu </button>
</form>

@endsection
