<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
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
            'grado_id' => $this->faker->numberBetween(1, 6)

        ];
    }
}
