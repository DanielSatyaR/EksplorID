<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['id' => 1, 'name' => 'Bali', 'slug' => 'bali', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Bandung', 'slug' => 'bandung', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Jakarta', 'slug' => 'jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Malang', 'slug' => 'malang', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Yogya', 'slug' => 'yogya', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Semarang', 'slug' => 'semarang', 'created_at' => now(), 'updated_at' => now()],
        ];

        foreach ($categories as $category) {
            Category::create([$category]);
        }
    }
}
