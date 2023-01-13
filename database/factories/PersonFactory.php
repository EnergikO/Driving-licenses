<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'passport_key' => Str::random(10),
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'phone_number' => fake()->unique()->phoneNumber(),
            'gender' => ['male', 'female'][rand(0, 1)],
        ];
    }
}
