<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return $usuario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;

        $usuario->save();
        
        return $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, usuario $usuario)
    {
        $usuario = Usuario::findOrFail($request->id);
        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        $usuario = Usuario::findOrFail($request->id);

        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;

        $usuario->save();

        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, usuario $usuario)
    {
        $usuario = Usuario::destroy($request->id);
        return $usuario;
    }
}
