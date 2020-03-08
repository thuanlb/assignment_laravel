<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Arr;
use Auth;

class AuthController extends Controller
{
    public function getLoginForm()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $data = Arr::except($request->all(), ['_token']);
        $result = Auth::attempt($data);

        return redirect()->route('home.hello_world');
    }
}
