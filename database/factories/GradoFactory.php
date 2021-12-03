<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradoFactory extends Factory
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
            'username' => $this->faker->userName(), 
            'profesores_id' => $this->faker->numberBetween(1, 20), 
            'alumnos_id' => $this->faker->numberBetween(1,30)
        ];
    }
}
