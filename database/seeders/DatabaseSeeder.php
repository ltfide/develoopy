<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        Post::factory(20)->create();
        User::factory(5)->create();

        Category::create([
            "name" => "Javascript",
            "slug" => "javascript",
            "category_logo" => "/img/javascript-logo.png"
        ]);

        Category::create([
            "name" => "PHP",
            "slug" => "php",
            "category_logo" => "/img/php-logo.png"
        ]);

    }
}
