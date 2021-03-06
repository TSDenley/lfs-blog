<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function __construct () {
        $this->middleware('guest', [ 'except' => 'destroy' ]);
    }

    public function create () {
        return view('sessions.create');
    }

    public function store () {
        if (! auth()->attempt(request([ 'email', 'password' ])) ) {
            return redirect('/login')->withErrors([
                'message' => 'Please check your details and try again',
            ]);
        }

        return redirect('/posts');
    }

    public function destroy () {
        auth()->logout();
        return redirect('/');
    }
}
