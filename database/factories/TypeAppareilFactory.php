<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeAppareil>
 */
class TypeAppareilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arr = ['Boeing 747-100', 'Airbus A300', 'Concorde', 'Boeing 737-400'];
        return [
            'libType' => $arr[array_rand($arr)],
            'nbPlace' => rand(100, 550),
        ];
    }
}
