<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\EspecialidadesResource;
use App\Models\Especialidades;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return EspecialidadesResource::collection(Especialidades::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $especialidad = Especialidades::create($request->all());
     return new EspecialidadesResource($especialidad);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return new EspecialidadesResource(Especialidades::findOrFail($id));
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
       $request -> validate(Especialidades::reglasValidacion());
       $especialidad = Especialidades::findOrFail($id);
       $especialidad -> update($request->all());
       return new EspecialidadesResource($especialidad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delelte = Especialidades::findOrFail($id);
        $delelte -> delete();
        return response()->json([
            "message"=>"Datos Borrados"
        ],202);
    }
}
