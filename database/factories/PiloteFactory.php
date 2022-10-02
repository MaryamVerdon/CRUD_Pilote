<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pilote>
 */
class PiloteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => fake()->lastName(),
            'prenom' => fake()->firstName(),
            'adresse' => fake()->streetAddress(),
            'ville' => fake()->city(),
            'cp' => fake()->randomNumber(5, true),
            'embauche' => fake()->date(),
            'salaire' => rand(3000, 5500),
            'commission' => rand(100, 2000)
        ];
    }
}
