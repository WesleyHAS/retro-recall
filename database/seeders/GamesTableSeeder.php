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
            'release_date' => '2023-01-02',
            // Add other fields as needed
        ]);

        // Add more games as needed
    }
}
