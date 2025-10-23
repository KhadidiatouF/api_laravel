<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin par défaut
        User::factory()->create([
            'nom' => 'FALL',
            'prenom' => 'Khadija',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]);

        // 5 utilisateurs aléatoires
        User::factory(5)->create();

    }

}
