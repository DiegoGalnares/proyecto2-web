@extends('layouts.app')
@section('content')

<main class="main">
	<div>
		<div class="publicationsPage">
			<h1 class="publicationWelcomeMessage">
				Edita
			</h1>
			<form class="mx-md-auto publicationBox" action="{{route('publicar.update', $publicacion->id)}}" method="POST" enctype="multipart/form-data">
				@method('PATCH')
				@csrf
				<input type="title" class="publicationInputTitle" name="name" placeholder="Autor" value="{{$publicacion->name}}">
				<input type="title" class="publicationInputTitle" name="titulo" placeholder="Titulo de la publicacion" value="{{$publicacion->tittle}}">
				<input type="text" class="publicationInputContent" name="content" placeholder="Contenido" value="{{$publicacion->content}}">
				<!--<textarea name="comentarios"class="publicationInputContent" name="content" placeholder="Contenido"></textarea>-->
				<select class="publicationInputTitle" name="category" value="{{$publicacion->category}}">
					<option class="publicationInputTitle">Pop</option>
					<option class="publicationInputTitle">Hip-Hop/Rap</option>
					<option class="publicationInputTitle">Otra</option>
				</select>
				<input type="date" class="publicationInputDT" name="date" value="{{$publicacion->date}}">
				<input type="time" class="publicationInputDT" name="time" value="{{$publicacion->time}}">
				<h2>Portada Actual</h2>
				<a href="{{asset("publicaciones/$publicacion->file")}}">{{$publicacion->file}}</a>
				<h2>Modificar archivo: </h2>
				<input type="file" name="file2" encypted>
				<input type="submit" class="boton botonentrega" id="submit" value="GUARDAR">
			</form>
			
		</div>
	</div>
</main>

@endsection