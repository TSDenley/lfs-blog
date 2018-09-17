<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.site-meta')
    </head>

    <body>
        @include('layouts.header')

        <main class="site-main">
          @yield('content')
        </main>
    </body>
</html>
