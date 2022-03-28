<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidades')->insert([
            ['especialidad'=> 'Psicologia de la educación'],
            ['especialidad'=> 'Psicología clínica'],
            ['especialidad'=> 'Sexología'],
            ['especialidad'=> 'Psicología familiar y de pareja'],
            ['especialidad'=> 'Psicología del deporte'],
            ['especialidad'=> 'Psicología de las organizaciones'],
            ['especialidad'=> 'Psicología de la publicidad'],
            ['especialidad'=> 'Psicología forense'],
            ['especialidad'=> 'NeouroPsicología'],
            ['especialidad'=> 'Psicología social']
        ]);
    }
}
