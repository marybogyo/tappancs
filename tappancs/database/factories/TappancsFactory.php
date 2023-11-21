<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tappancs>
 */
class TappancsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nev' => fake()->name(),
            'fajta' => fake()->word(),
            'foot' => rand(4,4),
            'user_id'=> User::all()->random()->id
        ];
    }
}
