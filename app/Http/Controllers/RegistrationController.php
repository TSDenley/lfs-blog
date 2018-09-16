<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create () {
        return view('registration.create');
    }

    public function store () {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $hashed = Hash::make(request('password'));

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => $hashed,
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
