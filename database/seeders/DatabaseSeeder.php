<?php

namespace Database\Seeders;

use App\Models\Flat;
use App\Models\Shop;
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
        // \App\Models\User::factory(10)->create();
        Flat::factory(4)->create();
        Shop::factory(4)->create();
    }
}
