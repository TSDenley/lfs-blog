<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Blog' }} | Laravel from Scratch</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        <header class="site-header">
            <h1 class="main-heading"><a href="/">Blog</a></h1>
            @include('layouts.nav')
        </header>

        <main class="content">
          @yield('content')
        </main>
    </body>
</html>
