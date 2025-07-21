<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // Validate the data
        $attributes = request()->validate([
            'name' => ['min:3', 'required',],
            'last_name' => ['min:3', 'required'],
            'email' => ['required', 'max:54', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        // Create the user account
        $user = User::create($attributes);

        // Login the user
        Auth::login($user);

        // Redirect
        return redirect('/job');
    }
}
