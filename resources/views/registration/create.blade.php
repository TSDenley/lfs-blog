@extends('layouts.layout', [ 'title' => 'Register' ])

@section('content')
    <h2>Register</h2>

    @include('layouts.errors')

    <form action="/register" method="POST" class="create-user-form">
        {{ csrf_field() }}

        <p>
            <label for="name">Name</label>
            <input id="name" name="name" type="text" required />
        </p>

        <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="me@example.com" required />
        </p>

        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required />
        </p>

        <p>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required />
        </p>

        <p><button type="submit" class="btn-default">Sign up</button></p>
    </form>
@endsection
