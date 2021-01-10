<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones= Publicacion::all();
        return view('admin.publicaciones.index', ['publicaciones'=>$publicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacion=new Publicacion;
        $publicacion->name=$request->name;
        $publicacion->tittle=$request->titulo;
        $publicacion->content=$request->content;
        $publicacion->category=$request->category;
        $publicacion->date=$request->date;
        $publicacion->time=$request->time;

        $file=$request->file;
        $name=$file->getClientOriginalName();
        $destination = public_path().'/publicaciones';
        $file->move($destination, $name);
        $publicacion->file=$name;

        $publicacion->save();
        return redirect('publicar');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion=Publicacion::findOrFail($id);
        return view('admin.publicaciones.show', ['publicacion'=>$publicacion]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion=Publicacion::findOrFail($id);
        return view('admin.publicaciones.edit', ['publicacion'=>$publicacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $publicacion=Publicacion::findOrFail($id);

        $publicacion->name=$request->name;
        $publicacion->tittle=$request->titulo;
        $publicacion->content=$request->content;
        $publicacion->category=$request->category;
        $publicacion->date=$request->date;
        $publicacion->time=$request->time;
        if ($request->file2 == NULL) {
            $publicacion->save();
            return redirect('publicar');
        }
        $file=$request->file2;
        $name=$file->getClientOriginalName();
        $destination = public_path().'/publicaciones';
        $file->move($destination, $name);
        $publicacion->file=$name;
        $publicacion->save();
        return redirect('publicar');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion=Publicacion::findOrFail($id);
        $publicacion->delete();
        return redirect('publicar.index');       
    }
}
