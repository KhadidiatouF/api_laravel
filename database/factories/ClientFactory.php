<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'telephone' => $this->faker->unique()->numerify('77#######'),
            'email' => $this->faker->unique()->safeEmail(),
            'adresse' => $this->faker->address(),
        ];
    }
}
