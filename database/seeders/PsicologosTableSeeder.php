<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PsicologosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psicologos')->insert([
            [
                'nombre' => 'Pamela',
                'apellido_paterno' => 'Aldama',
                'apellido_materno' => 'Gutiérrez',
                'costo_consulta' => 500.00,
                'celular' => '1234567895',
                'sexo'=>'femenino',
                'direccion_id'=> 1,
                'especialidad_id' => 5
            ],
            [
                'nombre' => 'Sara',
                'apellido_paterno' => 'Salomé',
                'apellido_materno' => 'Hernández',
                'costo_consulta' => 500.00,
                'celular' => '1234567894',
                'sexo'=>'femenino',
                'direccion_id'=> 2,
                'especialidad_id' => 4
            ],
    ]);
    }
}
