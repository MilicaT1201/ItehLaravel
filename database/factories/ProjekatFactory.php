<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjekatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->word(),
            'projektant' => $this->faker->name(),
            'godina' => $this->faker->numberBetween($min = 1990, $max = 2022),
        ];
    }
}
