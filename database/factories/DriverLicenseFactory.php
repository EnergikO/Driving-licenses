<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DriverLicense>
 */
class DriverLicenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $person = Person::all()->random();
        return [
            'passport_key' => $person->passport_key,
            'first_name' => $person->first_name,
            'last_name' => $person->last_name,
            'gender' => $person->gender,
            'expiration_date' => Carbon::now()->add(10, 'year'),
            'vehicle_type' => ['A/B', 'C/D'][rand(0, 1)],
        ];
    }
}
