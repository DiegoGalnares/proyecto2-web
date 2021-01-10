<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Música') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        
    <main>
        <div class="bienvenida">
            <h1 class="welcomeTitle">
                Bienvenido (:
            </h1>
            <div class="botonBoxWelcome">
                <a href="{{route('login')}}" class="botonesBienvenida">Iniciar Sesion</a>
                <a href="{{route('register')}}" class="botonesBienvenida">Registrate</a>
                <a href="" class="botonesBienvenida">Invitado</a>
            </div>
        </div>
    </main>
</body>
</html>