<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed types data
        Type::create([
            'name' => 'Action',
        ]);

        Type::create([
            'name' => 'Adventure',
        ]);

        // Add more types as needed
    }
}
