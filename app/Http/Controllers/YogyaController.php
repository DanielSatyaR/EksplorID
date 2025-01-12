<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class YogyaController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        // Mendapatkan ID kategori 'Bandung' dari tabel categories
        $yogyaCategoryId = Category::where('name', 'Yogyakarta')->value('id');

        // Ambil data dari tabel 'destinasi' berdasarkan category_id
        $destinasiYogya = Destinasi::where('category_id', $yogyaCategoryId)->get();

        // Kirim data ke view
        return view('destinasi.yogya.yogya', compact('destinasiYogya'));
    }

    public function show($slug)
    {
        // Ambil data destinasi berdasarkan ID
        $destinasi = Destinasi::with('category', 'images')->where('slug', $slug)->firstOrFail();

        // Kirim data ke view detail
        return view('destinasi.yogya.wisata.index', compact('destinasi'));
    }
}
