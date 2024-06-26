<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed games data
        Game::create([
            'title' => 'Game Title',
            'description' => 'Description of the game.',
            'release_year' => 2023,
            // Add other fields as needed
        ]);

        // Add more games as needed
    }
}
