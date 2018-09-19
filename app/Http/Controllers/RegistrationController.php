<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use App\Mail\Welcome;
use App\User;

class RegistrationController extends Controller {

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

        // Email the user
        \Mail::to($user)->send(new Welcome($user));

        return redirect('/');
    }

}
