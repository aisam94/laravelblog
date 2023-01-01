<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'GoodBye!!!');
    }

    public function store(){
        // validate request
        $attribute = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // authenticate and login user based on credentials provided
        if (auth()->attempt($attribute)){
            // redirect
            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Credentials cannot be verified'
        ]);
    }
}
