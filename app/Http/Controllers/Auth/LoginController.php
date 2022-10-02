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
            return redirect()->route('dashboard.index');
        }
            
        return view('auth.login');
    }

    public function todoLogin(Request $request) {

        $remember_me = $request->has('remember') ? true : false;

        if(Auth::attempt($request->only('email', 'password'), $remember_me)) {
            return redirect()->route('dashboard.index');
        }

        return Redirect::back()->with('msg', 'Your Email or Password is not valid!');
    }

    public function logout() {
        Auth::logout();
        // return redirect()->route('login')->with('msg', 'Successfuly Logout!');
        return redirect('/')->with('msg', 'Successfuly Logout!');
    }
}
