<nav class="nav-user">
    @if (Auth::check())
        <span>Welcome, {{ Auth::user()->name }}</span>
        <a href="/logout">Logout</a>
    @else
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endif
</nav>
