<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas';
    public $timestamps = false;
    protected $fillable = [
        'fecha_consulta',
        'estatus',
        'usuario_id',
        'psicologo_id',
    ];
    public static function reglasValidacion(){
        return[
            'fecha_consulta' => 'required',
            'estatus' => 'required',
            'usuario_id' => 'required',
            'psicologo_id' => 'required',
        ];
    }
}
