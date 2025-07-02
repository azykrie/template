<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->guard()->attempt($credentials)) {
            return redirect()->intended('dashboard')->with('success', 'Login successful.');
        }

        return redirect()->back()->withErrors('error', 'Invalid email or password.');
    }
}
