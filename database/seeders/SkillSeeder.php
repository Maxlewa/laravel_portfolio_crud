<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "codelg" => "HTML",
                "progress" => 100,
                "created_at" => now()
            ],    
            [
                "codelg" => "CSS",
                "progress" => 90,
                "created_at" => now()
            ],    
            [
                "codelg" => "Javascript",
                "progress" => 75,
                "created_at" => now()
            ],    
            [
                "codelg" => "PHP",
                "progress" => 80,
                "created_at" => now()
            ],    
            [
                "codelg" => "WordPress/CMS",
                "progress" => 90,
                "created_at" => now()
            ],    
            [
                "codelg" => "Photoshop",
                "progress" => 55,
                "created_at" => now()
            ],    
        ]);
    }
}
