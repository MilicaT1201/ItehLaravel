<?php

namespace Database\Factories;

use App\Models\Investitor;
use App\Models\Projekat;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvesticijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vrednost' => $this->faker->numberBetween($min = 50000, $max = 5000000),
            'kredit' => $this->faker->randomElement($array = array('DA', 'NE')),
            'investitor_id' => Investitor::factory(),
            'projekat_id' => Projekat::factory(),
        ];
    }
}
