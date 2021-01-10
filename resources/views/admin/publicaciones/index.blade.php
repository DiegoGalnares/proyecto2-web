@extends('layouts.app')
@section('content')

<main>

	<h2 class="categoriasText">Publicaciones</h2>
	<div class="createIndex">
		<a href="{{route('publicar.create')}}"> Crear nueva</a>
	</div>
	
	<div class="containerPost">
		@foreach($publicaciones as $publicacion)
		<div class="postPublication">
			<h3 class="postTitle">{{$publicacion->tittle}}</h3>
			<!--<a href="{{asset("publicacion/$publicacion->file")}}" ><img src="{{$publicacion->file}}" class="imgFormat" alt=""></a> -->
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
				<a href="{{route('publicar.show',$publicacion->id)}}" class="formPublicacion">Ver</a>
				<a href="{{route('publicar.edit',$publicacion->id)}}" class="formPublicacion">Editar</a>
				<form method="POST" action="{{route('publicar.destroy',$publicacion->id)}}" class="formPublicacion2" >
					@method('DELETE')
					@csrf
					<input type="submit" class="formPublicacionText2" value="Borrar">
				</form>
			</p>
		</div> 
		@endforeach

	</div>

</main>

@endsection