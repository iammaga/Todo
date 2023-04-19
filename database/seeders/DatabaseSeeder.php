<?php

namespace Database\Seeders;

use App\Models\Tasks;
use App\Models\Users;
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
        Tasks::factory(3)->create();

        Users::factory(3)->create();
    }
}
