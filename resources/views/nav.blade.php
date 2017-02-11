
    <div class="top-right links">
        @if (Auth::check())
            <span>Welcome, {{auth()->user()->name}}</span>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/logout') }}">Logout</a>
            <a href="{{ url('/posts') }}">Posts</a>
        @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        @endif
    </div>
