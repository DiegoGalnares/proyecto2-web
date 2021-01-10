@extends('layouts.app')
@section('content')

<main>
	<h2 class="categoriasText">Hip-Hop/Rap</h2>
	<div class="containerPost">
		@foreach($publicaciones as $publicacion)
		@if($publicacion->category == 'Hip-Hop/Rap')

		<div class="postPublication">
			<h3 class="postTitle">{{$publicacion->tittle}}</h3>
			<img class="imgFormat" src="{{ asset( 'publicaciones/' . $publicacion->file)}}"
			<p class="datosPublicacion">
				<br>
				{{$publicacion->name}}
				<br>
				{{$publicacion->date}} a las {{$publicacion->time}}
			</p>
			<p class="publicationText">
				{{$publicacion->content}} 
				<br>
                <a href="{{route('comentarios.show',$publicacion->id)}}" class="formPublicacion">Ver</a>
			</p>
		</div>
		@endif
		@endforeach
	</div>
</main>

@endsection