<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CitasResource extends JsonResource
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
            'fecha_consulta' => $this->fecha_consulta,
            'estatus' => $this->estatus,
            'usuario_id' => $this->usuario_id,
            'psicologo_id' => $this->psicologo_id,
        ];
    }
}
