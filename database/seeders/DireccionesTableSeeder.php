<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direcciones')->insert([
            [
                'estado'=>'México',
                'municipio' => 'Otzolotepec',
                'calle'=> 'Emiliano Zapata',
                'codigo_postal'=> '52085',
                'numero_interior' => '18',
                'numero_exterior' => 'N/A',
                'id_usuario' => 1
            ],
            [
                'estado'=>'México',
                'municipio' => 'Otzolotepec',
                'calle'=> 'Emiliano Zapata',
                'codigo_postal'=> '52085',
                'numero_interior' => '18',
                'numero_exterior' => 'N/A',
                'id_usuario' => 2
            ]
        ]);
    }
}
