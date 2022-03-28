<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuariosResource extends JsonResource
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
        'name' => $this->name,
        'primer_apellido' => $this->primer_apellido,
        'segundo_apellido' => $this->segundo_apellido,
        'sexo' => $this->sexo,
        'fecha_nacimiento' => $this->fecha_nacimiento,
        'numero_telefono' => $this->numero_telefono,
        'email' => $this->email,
        'password' => $this->password,
        'direccion_id' => $this->direccion_id
        ];
    }
}
