<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PsicologosResource;
use App\Models\Psicologos;

class PsicologosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return PsicologosResource::collection(Psicologos::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $psicologo = Psicologos::create($request->all());
        return new PsicologosResource($psicologo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return new PsicologosResource(Psicologos::findOrFail($id));
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
       $request -> validate(Psicologos::reglasValidacion());
       $psicologo = Psicologos::findOrFail($id);
       $psicologo -> update($request->all());
       return new PsicologosResource($psicologo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Psicologos::findOrFail($id);
        $delete -> delete();
        return response() -> json([
            "message" => "Datos borrados"
        ],202);
    }
}
