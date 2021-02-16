<?php

namespace Database\Seeders;

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
        \App\Models\DirectorioSeeder::factory(10)->create();
        // $this->call(class: DirectorioSeeder::class);
    }
}
