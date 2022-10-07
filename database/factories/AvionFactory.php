<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avion>
 */
class AvionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arr = ['Roissy', 'Orly', 'Brive ', 'Blagnac', 'Poretta', 'Saint Geoir'];
        return [
            'nomAvion' => $arr[array_rand($arr)],
            'nbhvol' => rand(100, 20000),
            'anneeService' => rand(1980, 2000),
            'typeAppareil_id' => rand(1, 20),

        ];
    }
}
