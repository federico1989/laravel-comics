<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <a href="{{ route('homepage') }}">Logo</a>
            <a href="{{ route('characters') }}">CHARACTERS</a>
            <a href="{{ route('comics') }}">COMICS</a>
            <a href="{{ route('movies') }}">MOVIES</a>
            <a href="{{ route('tv') }}">TV</a>
            <a href="{{ route('games') }}">GAMES</a>
            <a href="{{ route('videos') }}">VIDEOS</a>
            <a href="{{ route('news') }}">NEWS</a>
            <a href="{{ route('shop') }}">SHOP</a>
            <a href="#">SEARCH</a>
            <a href="{{ route('admin.index') }}">ADMIN</a>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            
        </footer>
    </div>
</body>
</html>
