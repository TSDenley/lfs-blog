<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.site-meta')
    </head>

    <body>
        @include('layouts.header')

        <div class="site-container">
            <main class="site-main aside">
              @yield('content')
            </main>

            <aside class="site-aside">
                @yield('aside')
            </aside>
        </div>
    </body>
</html>
