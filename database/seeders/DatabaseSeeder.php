<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(CitasTableSeeder::class);
       $this->call(DireccionesTableSeeder::class);
       $this->call(EspecialidadesTableSeeder::class);
       $this->call(PsicologosTableSeeder::class);
       $this->call(UsersTableSeeder::class);
    }
}
