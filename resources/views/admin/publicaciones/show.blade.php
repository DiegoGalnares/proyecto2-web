@extends('layouts.app')
@section('content')

<main class="main">
	<div class="publicationComplete">
		<h1>{{$publicacion->tittle}}</h1>
		<img class="publicationCompleteImg" src="{{ asset( 'publicaciones/' . $publicacion->file)}}"
		<p class="datosPublicacion">
				{{$publicacion->autor}}
				<br>
				{{$publicacion->date}} a las {{$publicacion->time}}
			</p>
		<p class="publicationCompleteText">
			{{$publicacion->content}}
		</p>
	</div>
</main>

@endsection