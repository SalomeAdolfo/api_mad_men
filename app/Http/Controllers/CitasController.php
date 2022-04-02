<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Psicologos;
use App\Models\Usuarios;
class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cita = Citas::all();
        return view('citas.index', compact('cita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cita = new Citas;
        $psicologo = Psicologos::select('id', 'nombre')->orderBy('nombre', 'asc')->pluck('nombre','id');
        $usuario = Usuarios::select('id','name')->orderBy('name','asc')->pluck('name','id');
        return view('citas.form', compact('cita','psicologo','usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Citas::create($request->all());
        return redirect()->route('citas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Citas::findOrFail($id);
        $psicologo= Psicologos::select('id','nombre')->orderBy('nombre','asc')->pluck('nombre','id');
        $usuario = Usuarios::select('id','name')->orderby('name','asc')->pluck('name','id');
        return view('citas.form',compact('cita','psicologo','usuario'));
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
        $cita = Citas::findOrFail($id);
        $cita -> update($request->all());
        return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Citas::findOrFail($id);
        $cita -> delete();
        return redirect()->route('citas.index');
    }
}
