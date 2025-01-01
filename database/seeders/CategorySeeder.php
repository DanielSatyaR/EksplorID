<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Bali', 'Bandung', 'Jakarta', 'Malang', 'Yogyakarta', 'Semarang'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
