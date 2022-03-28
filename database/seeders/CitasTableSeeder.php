<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citas')->insert([
            [
               'fecha_consulta'=> '2022-04-18',
               'estatus' => 'activa',
               'usuario_id' => 2,
               'psicologo_id' => 1 
            ],
            [
               'fecha_consulta'=> '2022-04-18',
               'estatus' => 'activa',
               'usuario_id' => 1,
               'psicologo_id' => 2
            ],
        ]);
    }
}
