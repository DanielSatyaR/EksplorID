<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('destinasi_images', function (Blueprint $table) {
            $table->id(); // ID sebagai primary key
            $table->foreignId('destinasi_id') // Foreign key ke tabel destinasi
                ->constrained('destinasi') // Pastikan tabel "destinasi" sudah ada
                ->onDelete('cascade'); // Hapus gambar jika destinasi dihapus
            $table->string('image'); // Kolom untuk menyimpan path gambar
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinasi_images');
    }
};
