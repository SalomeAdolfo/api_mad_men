<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DireccionesResource extends JsonResource
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
            'estado' => $this->estado,
            'municipio' => $this->municipio,
            'calle' => $this->calle,
            'codigo_postal' => $this->codigo_postal,
            'numero_interior' => $this->numero_interior,
            'numero_exterior' => $this->numero_exterior,
        ];
    }
}
