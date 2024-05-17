<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $formData = request()->validate([
            'name'=> 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email', 
            'password'=> 'required|min:4|confirmed',

        ]);
        $user = User::create($formData);

        auth()->login($user);
        return redirect('/dashboard')->with('success', 'Welcome, '. $user->name);
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye');
    }

    public function login(){
        return view('auth.login');
    }

    public function post_login(){
        $formData = request()->validate([ 
            'email' => 'required|email|max:255|exists:users,email', 
            'password'=> 'required|min:4|max:255',
        ],[
            'email.exists' => 'The email you type is not register'
        ]);

        if(auth()->attempt($formData)){
            return redirect('/dashboard')->with('success', 'Welcome back');
            
        }else{
            return redirect()->back()->withErrors([
                'email' => 'User Credential Wrong'
            ]);
        }
    }

    public function dashboard(){
        return view('admins.dashboard');
    }
}
