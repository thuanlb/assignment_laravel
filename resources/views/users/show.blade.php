@extends('layouts')


@section('contents')

    @if(empty($userData))
        No data
    @else
        <p style="text-align:center">Name: {{ $userData->name }}</p>
        <p style="text-align:center">Email: {{ $userData->email }}</p>
        <p style="text-align:center">phone: {{ $userData->phone }}</p>
        <p style="text-align:center">Ngayf sinh: {{ $userData->date_of_birth }}</p>

    @endif

@endsection
