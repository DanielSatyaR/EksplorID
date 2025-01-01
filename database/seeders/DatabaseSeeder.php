<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Destinasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder untuk User dan Category
        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
        ]);

        // Dapatkan semua kategori
        $categories = Category::all();

        // Generate data destinasi
        Destinasi::factory(100)->create([
            'category_id' => function () use ($categories) {
                return $categories->random()->id; // Pilih ID kategori secara acak
            },
        ]);
    }
}
