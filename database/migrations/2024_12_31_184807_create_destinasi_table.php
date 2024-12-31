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
        Schema::create('destinasi', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'destinasi_category_id'
            );
            $table->text('description')->nullable();
            // $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::table('destinasi', function (Blueprint $table) {
            // $table->decimal('price', 10, 2)->nullable();
            // $table->integer('tickets_available')->nullable();
            $table->text('excerpt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinasi');
    }
};
