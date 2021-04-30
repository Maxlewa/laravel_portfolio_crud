<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persos')->insert([
            [
                "nom" => "Smith",
                "prenom" => "Alex",
                "job" => "UI/UX Designer & Web Developer",
                "website" => "www.example.com",
                "phone" => "479676539",
                "city" => "New York",
                "country" => "USA",
                "age" => 27,
                "degree" => "Master",
                "email" => "email@example.com",
                "intro" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "bio" => "Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.",
                "italic" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "state" => "Available",
                "image" => "profile-img.jpg",
                "created_at" => now()
            ]    
        ]);
    }
}
