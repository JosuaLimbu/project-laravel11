<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Laravel 11',
            'slug' => 'laravel-11',
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'Deep Learning',
            'slug' => 'deep-learning',
            'color' => 'yellow',
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'purple',
        ]);
    }
}
