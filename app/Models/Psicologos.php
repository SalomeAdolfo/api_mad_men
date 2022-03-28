<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psicologos extends Model
{
    protected $table = 'psicologos';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'costo_consulta',
        'celular',
        'sexo',
        'direccion_id',
        'especialidad_id',
    ];
    public static function reglasValidacion(){
        return[
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'costo_consulta' => 'required',
            'celular' => 'required',
            'sexo' => 'required',
            'direccion_id' => 'required',
            'especialidad_id' => 'required',  
        ];
    }
}
