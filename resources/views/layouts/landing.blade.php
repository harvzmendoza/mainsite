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
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="containder-fluid">
            <div class="p-1 bg-info">
            </div>
        </div>
        <div class="containder-fluid">
            <div class="p-1 bg-warning">
            </div>
        </div>
        <div class="containder-fluid">
            <div class="p-1 bg-primary">
            </div>
        </div>
       
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-primary border-bottom-info border-5 border-top border-primary">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    
                </a>
            </div>
        </nav> -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
