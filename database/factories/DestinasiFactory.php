<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class DestinasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()) . '-' . Str::random(6), // Tambahkan ID unik untuk slug
            'category_id' => Category::factory(), // Relasi ke kategori
            'description' => $this->faker->paragraphs(3, true), // Deskripsi berupa 3 paragraf
            'excerpt' => $this->faker->sentence(10), // Potongan teks pendek
            'image' => 'images/' . $this->faker->unique()->word() . '.jpg', // Contoh gambar
            'price' => $this->faker->numberBetween(10000, 100000), // Harga acak
        ];
    }
}
