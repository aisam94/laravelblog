<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // create new account
    public function create(){
        return view('register.create');
    }

    // 
    public function store(){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:4|max:255',
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        // helper method
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }
}
