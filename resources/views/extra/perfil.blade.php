@extends('layouts.app')

@section('content')
<main class="mainProfile">
	<div class="profile">
		<img class="profilePicture" src="img/perfil.jpg" alt="">
		<p class="profileText">
			<a href="">Cambiar foto de perfil</a>
		</p>
		<h1>{{Auth::user()->name}}</h1>
		<div class="profileTextC" >
			Correo Electronico
			<output type="email" class="controlProfile">{{Auth::user()->email}}</output>
			<br>
			Administrador
			@if(Auth::user()->admin)
			<output type="email" class="controlProfile">Eres administrador</output>
			@else
			<output type="email" class="controlProfile">Eres usuario</output>
			@endif
		</div>
	</div>
</main>
@endsection