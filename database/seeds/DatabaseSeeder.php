<?php

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
         $this->call(RoleTabelSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(StateTabelSeed::class);
         $this->call(LocalityTabelSeeder::class);
         $this->call(NationalTabelSeeder::class);
    }
}
