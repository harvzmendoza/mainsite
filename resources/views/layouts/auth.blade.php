<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">

</head>
<body className='snippet-body'>
    <body id="body-pd">
        <header class="header bg-primary" id="header">
            <div class="header_toggle"> <i class='bi bi-list text-white' id="header-toggle"></i> </div>
            <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
            <label class="text-white">{{ Auth::user()->name }}</label>
        </header>
        <div class="l-navbar bg-dark" id="nav-bar">
            <nav class="nav">
                <div> 
                    <a href="#" class="nav_logo"> <i class='bi bi-ticket-detailed nav_logo-icon'></i> <span class="nav_logo-name">UP Law Center</span> </a>
                    <div class="nav_list"> 
                        <a href="{{route('home')}}" class="nav_link {{ request()->is('home*') ? 'active' : '' }}"> <i class='bi bi-house-gear nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 

                    </div>
                </div> 
                <a class="nav_link"href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class='bi bi-box-arrow-in-left nav_icon'></i> <span class="nav_name">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </nav>
        </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>
<script type='text/javascript' src="{{ asset('js/sidebar.js') }}"></script>

</html>
