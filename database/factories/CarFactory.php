<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $weight = rand(1, 30);
        return [
            'brand' => fake()->word(),
            'model' => fake()->word(),
            'vehicle_type' => ['A/B', 'C/D'][rand(0, 1)],
            'weight' => $weight * 1.0,
            'max_weight' => $weight * 2,
            'type_of_drive' => ['передний', 'задний', 'полный', 'другой'][rand(0, 3)],
            'engine_layout' => ['спереди', 'сзади', 'по центру', 'другое'][rand(0, 3)],
            'fuel_type' => ['бензин', 'водород', 'електричество', 'другое'][rand(0, 3)],
            'power' => 1.0 * rand(70, 600),
            'fuel_consumption' => 1.0 * rand(1, 20),
            'state_license_plate' => Str::random(10),
            'owner_id' => Person::all()->random()->id,
        ];
    }
}
