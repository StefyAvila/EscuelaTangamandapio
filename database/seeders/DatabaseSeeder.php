<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Clase;
use App\Models\Grado;
use Illuminate\Database\Seeder;

use App\Models\Profesore;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Profesore::factory(20)->create();
        Alumno::factory(30)->create();
        Clase::factory(40)->create();
        Grado::factory(6)->create();

    }
}
