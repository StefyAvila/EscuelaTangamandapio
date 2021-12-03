<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            //
           'name' => $this->faker->name(),
          'biografia' =>$this->faker->paragraph(),
            'telefono' =>$this->faker->phoneNumber(),
            'direccion' =>$this->faker->address()
        ];
    }
}
