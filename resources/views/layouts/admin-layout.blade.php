<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proyecto 2 - Diseño web</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
</head>
</header><!-- /header -->
<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light-#A12C2C px-lg-5 py-2">
			<a class="navbar-brand-#A12C2C d-flex pl-xl-5 " href="{{url('/')}}">
				<i class="material-icons">music_note</i>
			</a>
			<button class="navbar-toggler pr-lg-5" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<i class="material-icons">menu</i>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02 pr-5 navbarSupportedContent">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="categoria1.html">Hip-hop/Rap <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="categoria2.html">Pop <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="discover.html">Descubre <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown mr-4">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{Auth::user()->name}}
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item dropdownColor" href="profile.html">Perfil</a>
							<a class="dropdown-item" href="publications.html">Publicar</a>
							<a class="dropdown-item" href="#">Cerrar sesión</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</header><!-- /header -->
	@yield('content')

</body>


<script src="{{asset('js/app.js')}}"></script>
</html>