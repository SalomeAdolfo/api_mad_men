<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PsicologosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellido_paterno' => $this->apellido_paterno,
            'apellido_materno' => $this->apellido_materno,
            'costo_consulta' => $this->costo_consulta,
            'celular' => $this->celular,
            'sexo' => $this->sexo,
            'direccion_id' => $this->direccion_id,
            'especialidad_id' => $this->especialidad_id,
        ];
    }
}
