<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\HomeController;
use App\Models\Publicacion;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['logeado'])->group(function(){
	Route::get('/', function () {
		return view('welcome');
	});	
});
Route::resource('comentarios',ComentarioController::class);

Route::middleware(['admin'])->group(function(){
	Route::get('publicacion', function(){
		return view('layouts.admin-layout');
	});
	Route::resource('publicar', PublicacionController::class);
});

Route::get('guest', function(){
	return view('guest.index');
});

Route::get('Hip-Hop-Rap', function(){
	$publicaciones= Publicacion::all();
    return view('admin.publicaciones.categoria1', ['publicaciones'=>$publicaciones]);
});

Route::get('Pop', function(){
	$publicaciones= Publicacion::all();
    return view('admin.publicaciones.categoria2', ['publicaciones'=>$publicaciones]);
});


Route::get('descubre', function(){
	return view('extra.descubre');
});

Route::get('perfil', function(){
	if(auth()->guest()){
		return redirect('');
	}
	return view('extra.perfil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
