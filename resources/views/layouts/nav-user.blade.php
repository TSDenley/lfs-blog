<nav class="nav-user">
    @if (Auth::check())
        <span>Welcome, {{ Auth::user()->name }}</span>
        <form action="/logout" method="POST" class="logout-form">
            {{ csrf_field() }}
            <button type="submit" class="btn-link">Logout</button>
        </form>
    @else
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endif
</nav>
