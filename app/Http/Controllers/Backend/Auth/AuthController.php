<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }

    public function login()
    {
        return view('dashboard.login');
    }

    public function doLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'))->with('error', 'Email or password is incorrect');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }
}
