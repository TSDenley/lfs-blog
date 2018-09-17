@extends('layouts.layout', [ 'title' => 'Login' ])

@section('content')
    <h2>Login</h2>

    @include('layouts.errors')

    <form action="/login" method="POST" class="login-form">
        {{ csrf_field() }}

        <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="me@example.com" />
        </p>

        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" />
        </p>

        <p><button type="submit" class="btn-default">Login</button></p>
    </form>
@endsection
