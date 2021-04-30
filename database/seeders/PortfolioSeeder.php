<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                "filter" => "filter-app",
                "image" => "portfolio-1.jpg",
                "created_at" => now()
            ],
            [
                "filter" => "filter-web",
                "image" => "portfolio-2.jpg",
                "created_at" => now()
            ],
            [
                "filter" => "filter-app",
                "image" => "portfolio-3.jpg",
                "created_at" => now()
            ],
            [
                "filter" => "filter-card",
                "image" => "portfolio-4.jpg",
                "created_at" => now()
            ],
            [
                "filter" => "filter-web",
                "image" => "portfolio-5.jpg",
                "created_at" => now()
            ],
            [
                "filter" => "filter-app",
                "image" => "portfolio-6.jpg",
                "created_at" => now()
            ],
            [
                "filter" => "filter-card",
                "image" => "portfolio-7.jpg",
                "created_at" => now()
            ],
            [
                "filter" => "filter-card",
                "image" => "portfolio-8.jpg",
                "created_at" => now()
            ],
            [
                "filter" => "filter-web",
                "image" => "portfolio-9.jpg",
                "created_at" => now()
            ],
        ]);
    }
}
