<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compte>
 */
class CompteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'numCompte' => $this->faker->lastName(),
            'titulaire' => $this->faker->firstName(),
            'telephone' => $this->faker->phoneNumber(),
            'adresse' => $this->faker->address(),
            'role' => $this->faker->randomElement(['admin', 'client']),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
           
        ];
    }
}
