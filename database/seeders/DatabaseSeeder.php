<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    

        // Category::create([
        //     'name' => 'Laravel 11',
        //     'slug' => 'laravel-11',
        // ]); 

        // Post::create([
        //     'title' => 'Project 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'project-1',
        //     'body' => 'loreum ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
