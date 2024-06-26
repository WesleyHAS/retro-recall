<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Type;
use App\Models\Game;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed individual seeders
        $this->call([
            UsersTableSeeder::class,
            TypesTableSeeder::class,
            GamesTableSeeder::class,
        ]);
    }
}
