<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class grado_profesorFactory extends Factory
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
            'grado_id' => $this ->faker->numberBetween(1, 6),
            'profesor_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
