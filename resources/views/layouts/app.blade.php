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
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light-#A12C2C px-lg-5 py-2">
            <a class="navbar-brand-#A12C2C d-flex pl-xl-5 " href="{{route('home')}}">
                <i class="material-icons">music_note</i>
            </a>
            <button class="navbar-toggler pr-lg-5" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons">menu</i>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02 pr-5 navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('Hip-Hop-Rap')}}">Hip-hop/Rap <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('Pop')}}">Pop <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('descubre')}}">Descubre <span class="sr-only">(current)</span></a>
                    </li>
                    
                        @if(auth()->guest())
                            <a class="nav-link" href="{{route('login')}}">Inicia Sesion <span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="{{route('register')}}">Registrate <span class="sr-only">(current)</span></a>
                        @else
                            <li class="nav-item dropdown mr-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>    
                        @endif
                        
                        @if(auth()->guest())
                            
                        @else
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item dropdownColor" href="{{url('perfil')}}">Perfil</a>
                            @if(Auth::user()->admin)
                                <a class="dropdown-item" href="{{route('publicar.index')}}">Publicaciones</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Cerrar sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
    </header><!-- /header -->
    
    @yield('content')
</body>
</html>
