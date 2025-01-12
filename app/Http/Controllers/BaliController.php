<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class BaliController extends Controller
{
    public function index()
    {
        // Mendapatkan data kategori untuk dropdown (semua kategori)
        $categories = Category::all();

        // Mendapatkan ID kategori 'Bali' dari tabel categories
        $baliCategoryId = Category::where('name', 'Bali')->value('id');

        // Ambil data dari tabel 'destinasi' berdasarkan category_id
        $destinasiBali = Destinasi::where('category_id', $baliCategoryId)->get();

        // Kirim data ke view
        return view('destinasi.bali.bali', compact('destinasiBali', 'categories'));
    }

    public function show($slug)
    {
        // Ambil data destinasi berdasarkan ID
        $destinasi = Destinasi::with('category', 'images')->where('slug', $slug)->firstOrFail();

        // Kirim data ke view detail
        return view('destinasi.bali.wisata.index', compact('destinasi'));
    }
}
