@extends('layouts.app')
@section('content')
<main class="main">
		<div class="comentarios">
		<div class="comentariosAnteriores">
			<h1 class="comentariosTitulo">Comentarios</h1>

			<div class="comentarioIndividual">
				<h2 class="nombrecomentario">Diego:</h2>
				<p class="comentarioContent">-hola</p>
			</div>
			
		</div>
		<div class="crearComentario">
			<form action="" class="formComentario">
				<h2 class="nombreComentario">Hola Diego</h2>
				<input type="text" name="comentario" class="comentario" placeholder="Comenta algo">
				<input type="submit" name="submit" class="submitComentario">
			</form>
		</div>
	</div>
</main>

@endsection