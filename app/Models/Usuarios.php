<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'primer_apellido',
        'segundo_apellido',
        'sexo',
        'fecha_nacimiento',
        'numero_telefono',
        'email',
        'password',
    ];
    public static function reglasValidacion()
    {
        return [
            'name' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required',
            'numero_telefono' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ];
    }
    public static function etiquetas()
    {
        return [
            'name' => 'name',
            'primer_apellido' => 'primer_apellido',
            'segundo_apellido' => 'segundo_apellido',
            'sexo' => 'sexo',
            'fecha_nacimiento' => 'fecha_nacimiento',
            'numero_telefono' => 'numero_telefono',
            'email' => 'email',
            'password' => 'password',
        ];
    }
}
