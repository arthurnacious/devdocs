<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Getting Started', 'color_hex' => '#00FF00'],
            ['name' => 'API Reference', 'color_hex' => '#FF0000'],
            ['name' => 'Tutorials', 'color_hex' => '#0000FF'],
            ['name' => 'Support', 'color_hex' => '#FFFF00'],
            ['name' => 'Other', 'color_hex' => '#FFFFFF'],
        ]);
    }
}
