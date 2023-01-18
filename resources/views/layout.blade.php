<DOCTYPE html>
    <html>
    <head>
        <title>
            @yield('title', 'Blog')
        </title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>

    <body onload="document.body.style.visibility=`visible`;">
    <script>document.body.style.visibility=`hidden`;</script>
        <ul class="nav">
            <li><a class="glossy-button glossy-button--blue {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
            <li><a class="glossy-button glossy-button--blue {{ request()->routeIs('all') ? 'active' : '' }}" href="{{ route('all') }}">All Posts</a></li>
            @auth
            <li ><a class="glossy-button glossy-button--blue {{ request()->routeIs('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Create Post</a></li>
            <li><a class="glossy-button glossy-button--red" href="{{ route('logout') }}">Logout</a></li>
            <li class="glossy-button username">Logged in as <b>{{ Auth::user()->name }}</b></li>
            @else
            <li><a class="glossy-button glossy-button--green {{ request()->routeIs('register') ? 'active' : ''}}" href="{{ route('register') }}">Register</a></li>
            <li><a class="glossy-button glossy-button--green {{ request()->routeIs('login') ? 'active' : ''}}" href="{{ route('login') }}">Login</a></li>
            @endauth
        </ul>

    <div class="center-item">
        @if (session('success'))
        <div class="glossy-button glossy-button--success">
            {{ session('success') }}
        </div>
        @endif
    </div>

        <div class="main">
            @yield('content')
        </div>
    </body>

    </html>