<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect('/');
    }

    public function index(){
        return view("auth.login");
    }


    public function authenticate(){
            // dd(request()->all());
        $validated = request()->validate([
            "username" => "required|min:3",
            "password" => "required|min:8"
        ]);

        if (auth()->attempt($validated)) {
            // Authentication passed
            return redirect()->route('dashboard')->with('success', 'Logged in.');
        }

        // Authentication failed
        return redirect()->route('login')->withErrors([
            'error' => 'Invalid username or password.',
        ]);

    }
}
