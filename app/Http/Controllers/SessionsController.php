<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Validate request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Authenticate and login user based on credentials provided
        if (auth()->attempt($attributes)) {
            // Redirect with a success flash message
            return redirect('/')->with('success', 'Welcome Back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);
    }


    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
