<?php

namespace Database\Seeders;

use App\Models\Data;
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
        Data::factory()->count(30)->create();
    }
}
