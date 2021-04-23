<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "icon" => "icofont-simple-smile",
                "number" => 232,
                "title" => "Happy Clients",
                "phrase" => "consequuntur quae",
                "created_at" => now()
            ],    
            [
                "icon" => "icofont-document-folder",
                "number" => 521,
                "title" => "Projects",
                "phrase" => "adipisci atque cum quia aut",
                "created_at" => now()
            ],    
            [
                "icon" => "icofont-live-support",
                "number" => 1463,
                "title" => "Hours Of Support",
                "phrase" => "aut commodi quaerat",
                "created_at" => now()
            ],    
            [
                "icon" => "icofont-users-alt-5",
                "number" => 15,
                "title" => "Hard Workers",
                "phrase" => "rerum asperiores dolor",
                "created_at" => now()
            ]    
        ]);
    }
}
