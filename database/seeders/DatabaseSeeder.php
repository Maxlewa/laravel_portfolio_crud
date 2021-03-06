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
        // \App\Models\User::factory(10)->create();
        $this->call([PersoSeeder::class]);
        $this->call([FactSeeder::class]);
        $this->call([SkillSeeder::class]);
        $this->call([PortfolioSeeder::class]);
        $this->call([ServiceSeeder::class]);
        $this->call([ContactSeeder::class]);
        $this->call([MailSeeder::class]);
    }
}
