<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login() {

        if(Auth::user()) {
            return "dashboard";
        }
            
        return view('auth.login');
    }

    public function todoLogin(Request $request) {
        if(Auth::attempt($request->only('email', 'password'))) {
            return "login berhasil";
        }

        return Redirect::back()->with('msg', 'Your Email or Password is not valid!');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('msg', 'Successfuly Logout!');
    }
}
