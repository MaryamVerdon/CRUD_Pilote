<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vol>
 */
class VolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'villeArr' => fake()->city(),
            'villeDep' => fake()->city(),
            'dep_h' => rand(0, 23),
            'dep_min' => rand(0, 59),
            'arr_h' => rand(0, 23),
            'arr_min' => rand(0, 59),
        ];
    }
}
