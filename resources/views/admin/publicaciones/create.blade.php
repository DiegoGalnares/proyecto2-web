@extends('layouts.app')
@section('content')
<main class="main">
	<div>
		<div class="publicationsPage">
			<h1 class="publicationWelcomeMessage">
				Publica algo nuevo
			</h1>
			<form method="POST" class="mx-md-auto publicationBox" action="{{route('publicar.store')}}" enctype="multipart/form-data">
				@csrf
				<input type="title" class="publicationInputTitle" name="name" placeholder="Autor">
				<input type="title" class="publicationInputTitle" name="titulo" placeholder="Titulo de la publicacion">
				<input type="text" class="publicationInputContent" name="content" placeholder="Contenido">
				<!--<textarea name="comentarios"class="publicationInputContent" name="content" placeholder="Contenido"></textarea>-->
				<select class="publicationInputTitle" name="category">
					<option class="publicationInputTitle">Pop</option>
					<option class="publicationInputTitle">Hip-Hop/Rap</option>
					<option class="publicationInputTitle">Otra</option>
				</select>
				<input type="date" class="publicationInputDT" name="date">
				<input type="time" class="publicationInputDT" name="time">
				<h2>Seleccione la imagen de portada</h2>
				<input type="file" name="file" enctype required>
				<input type="text" class="d-none" name="tarea_id">
				<input type="submit" class="boton botonentrega" id="submit" value="PUBLICAR">
			</form>
			
		</div>
	</div>
</main>

@endsection