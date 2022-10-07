<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Affectation>
 */
class AffectationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'nbPassager' => rand(100, 550),
            'dateVol' => fake()->date(),
            'vol_id' => rand(1, 20),
            'pilote_id' => rand(1, 20),
            'avion_id' => rand(1, 20),

        ];
    }
}
