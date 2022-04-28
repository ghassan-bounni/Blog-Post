<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $user = User::create(request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', ValidationRule::unique('users', 'username'), 'min:3', 'max:255'],
            'email' => ['required', 'email', ValidationRule::unique('users', 'username'), 'max:255'],
            'password' => ['required', 'min:7', 'max:255'],
        ]));

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
