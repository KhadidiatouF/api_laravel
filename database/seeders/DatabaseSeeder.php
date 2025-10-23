
<?php

use Database\Seeders\CompteSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder // <-- DOIT être DatabaseSeeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // C'est ici que vous appelez vos autres Seeders (comme UserSeeder)
        $this->call([
             UserSeeder::class,
             CompteSeeder::class, // Si CompteSeeder est dans son propre fichier
        ]);

    }
}
