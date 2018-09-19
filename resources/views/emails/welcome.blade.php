<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
    </head>
    <body>
        <h1>Welcome, {{ $user->name }}!</h1>

        <p>Your registration was successful. <a href="{{ $loginURL }}">Login here</a>.</p>
    </body>
</html>
