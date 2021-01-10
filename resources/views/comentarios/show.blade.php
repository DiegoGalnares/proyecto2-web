@extends('layouts.app')

@section('content')
<main class="main">
	<div class="publicationComplete">
		<h1>{{$publicacion->tittle}}</h1>
		<img class="publicationCompleteImg" src="{{ asset( 'publicaciones/' . $publicacion->file)}}">
		<p class="datosPublicacion">
			{{$publicacion->autor}}
			<br>
			{{$publicacion->date}} a las {{$publicacion->time}}
		</p>
		<p class="publicationCompleteText">
			{{$publicacion->content}}
		</p>
	</div>

	<div class="comentarios">
		<div class="comentariosAnteriores">
			<h1 class="comentariosTitulo">Comentarios</h1>
			@foreach($comentarios as $comentario)
			@if($comentario->publicacion_id == $publicacion->id)
				<div class="comentarioIndividual">
					<h2 class="nombrecomentario">{{$comentario->name}}:</h2>
					<p class="comentarioContent">- {{$comentario->comentario}}</p>
				</div>
				@endif
			@endforeach
		</div>
		@if(auth()->guest())

		@else
		<div class="crearComentario">
			<form action="{{route('comentarios.store')}}" class="formComentario" method="POST" enctype="multipart/form-data">
				@csrf
				<h2 class="nombreComentario">Hola {{Auth::user()->name}}</h2>
				<input type="text" class="d-none" name="publicacion_id" value="{{$publicacion->id}}">
				<input type="text" name="comentario" class="comentario" placeholder="Comenta algo">
				<input type="submit" name="submit" class="submitComentario">
			</form>
		</div>
		@endif
	</div>
</main>

@endsection