<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icon" => "icofont-computer",
                "delay" => 0,
                "title" => "Lorem Ipsum",
                "text" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at" => now()
            ],       
            [
                "icon" => "icofont-chart-bar-graph",
                "delay" => 100,
                "title" => "Dolor Sitema",
                "text" => "Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",
                "created_at" => now()
            ],       
            [
                "icon" => "icofont-earth",
                "delay" => 200,
                "title" => "Sed ut perspiciatis",
                "text" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
                "created_at" => now()
            ],       
            [
                "icon" => "icofont-image",
                "delay" => 300,
                "title" => "Magni Dolores",
                "text" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
                "created_at" => now()
            ],       
            [
                "icon" => "icofont-settings",
                "delay" => 400,
                "title" => "Nemo Enim",
                "text" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque",
                "created_at" => now()
            ],       
            [
                "icon" => "icofont-tasks-alt",
                "delay" => 500,
                "title" => "Eiusmod Tempor",
                "text" => "Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi",
                "created_at" => now()
            ],       
        ]);
    }
}
