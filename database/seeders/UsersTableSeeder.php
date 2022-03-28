<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Ricardo',
            'primer_apellido'=> 'Salomón',
            'segundo_apellido'=>'Guerrero',
            'sexo'=>'masculino',
            'fecha_nacimiento'=> '2002-09-28',
            'numero_telefono'=> '7221867556',
            'email'=>'grenaslocas@gmail.com',
            'password'=>bcrypt('12345678'),
            'direccion_id'=>3
        ],
        [
            'name' => 'Oliver',
            'primer_apellido'=> 'Esquivel',
            'segundo_apellido'=>'Bautista',
            'sexo'=>'masculino',
            'fecha_nacimiento'=> '2002-08-27',
            'numero_telefono'=> '7221867555',
            'email'=>'olibaby@gmail.com',
            'password'=>bcrypt('12345678'),
            'direccion_id'=>4
        ],
        ]);
    }
}
