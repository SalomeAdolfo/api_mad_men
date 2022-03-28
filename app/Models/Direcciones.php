<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    protected $table = 'direcciones';
    public $timestamps = false;

    protected $fillable = [
        'estado',
        'municipio',
        'calle',
        'codigo_postal',
        'numero_interior',
        'numero_exterior',
    ];
    public static function reglasValidacion(){
        return[
            'estado' => 'required',
            'municipio' => 'required',
            'calle' => 'required',
            'codigo_postal' => 'required',
            'numero_interior' => 'required',
            'numero_exterior' => 'required'  
        ];
    }
}
