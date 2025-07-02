<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if(User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors('error', 'Email already exists.');
        }

        User::create($request->all());

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
