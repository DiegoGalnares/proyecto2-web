<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use App\Models\Comentario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $publicacion= Publicacion::all();
        return view('home', ['publicaciones'=>$publicacion]);
    }

    public function show($id)
    {
        $publicacion=Publicacion::findOrFail($id);
        return view('', ['publicacion'=>$publicacion]);
    }
}
