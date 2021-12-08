<?php

namespace Database\Seeders;

use App\Models\Alumno;

use App\Models\Grado;
use App\Models\grado_profesor;
use App\Models\profesor;
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
        // \App\Models\User::factory(10)->create();

        
        Grado::factory(6)->create();
        profesor::factory(20)->create();
        Alumno::factory(30)->create();
       // grado_profesor::factory(5)->create();
       
      


    }
}
