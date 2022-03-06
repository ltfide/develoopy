<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Programming;
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

        // Post::factory(20)->create();
        // User::factory(5)->create();

        // Category::create([
        //     "name" => "Programming",
        //     "slug" => "programming",
        //     "category_logo" => "/img/programming-logo.jpg"
        // ]);

        // Category::create([
        //     "name" => "Matematika",
        //     "slug" => "matematika",
        //     "category_logo" => "/img/matematika-logo.jpg"
        // ]);

        // Category::create([
        //     "name" => "Bahasa Inggris",
        //     "slug" => "bahasa-inggris",
        //     "category_logo" => "/img/english-logo.jpg"
        // ]);

        // Programming::create([
        //     'name' => 'PHP',
        //     'slug' => 'php',
        //     'programming_id' => 1,
        //     'programming_logo' => '/img/php-logo.png'
        // ]);

        // Programming::create([
        //     'name' => 'Javascript',
        //     'slug' => 'javascript',
        //     'programming_id' => 1,
        //     'programming_logo' => '/img/js-logo.png'
        // ]);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456') 
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('123456')
        ]);

        $user->assignRole('user');

        // $this->call(RoleSeeder::class);
    }
}
