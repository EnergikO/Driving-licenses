<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
use App\Models\DriverLicense;
use App\Models\Person;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         User::factory()->create([
             'login' => 'admin',
             'password' => 'password',
         ]);

         Person::factory(5)->create();
         DriverLicense::factory(5)->create();
         Car::factory(10)->create();
    }
}
