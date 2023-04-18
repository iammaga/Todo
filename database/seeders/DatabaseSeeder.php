<?php

namespace Database\Seeders;

use App\Models\Tasks;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Tasks::create([
            'title' => 'Task 1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adip euismod sit amet, sed diam euismod sed diam euismet. Ut enim ad minim veniam et met nulla pariatur et non proident et ullamcorper et faucibus vel fel magna aliquet et ullamcorper et faucibus vel fel arcu et ultrices sed diam.',
        ]);
    }
}
