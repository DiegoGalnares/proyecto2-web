@extends('layouts.app')

@section('content')
<main>
    <!-- IMAGENES -->
    <div class="imagenes">
        <div id="contenedorTarjeta">
            <div class="container-center my-container m-0 p-0 contenedor">
                <div class="row m-0 p-0">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">
                        <img src="img/introduccion4.jpg" alt="" class="imagenesLaterales">
                        <img src="img/introduccion2.jpg" alt="" class="imagenesLaterales">
                        <img src="img/musica.jpg" alt="" id="imagenPrincipal">
                        <img src="img/introduccion.jpg" alt="" class="imagenesLaterales">
                        <img src="img/introduccion2.jpg" alt="" class="imagenesLaterales">
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- Mensaje Introductorio -->
<div class="Musica">
    <h1 class="tituloIntroduccion"><b>Música</b></h1>
    <p class="parrafoIntroduccion">
        <br>La música es una forma de expresión, con ella se pueden transmitir todo tipo de emociones, nos hace sentir, nos vuelve reales, sin ella estaríamos condenados, el silencio dominaría y todo se apagaría. <br>
    </p>
</div>
<!-- PUBLICACIONES -->
<div class="publications">
    <h2 class="publicationsText">Publicaciones Recientes</h2>
    <div class="containerPost">
        @foreach($publicaciones as $publicacion)
        <div class="postPublication">
            <h3 class="postTitle">{{$publicacion->tittle}}</h3>
            <!--<a href="{{asset("publicacion/$publicacion->file")}}" ><img src="{{$publicacion->file}}" class="imgFormat" alt=""></a> -->
            <img class="imgFormat" src="{{ asset( 'publicaciones/' . $publicacion->file)}}"
            <p class="datosPublicacion">
                {{$publicacion->autor}}
                <br>
                {{$publicacion->date}} a las {{$publicacion->time}}
            </p>
            <p class="publicationText">
                {{$publicacion->content}}
                <br>
                <a href="{{route('comentarios.show',$publicacion->id)}}" class="formPublicacion">Ver</a>
            </p>
        </div> 
        @endforeach
    </div>
</main>
@endsection
