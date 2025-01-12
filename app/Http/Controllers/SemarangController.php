<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class SemarangController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        // Mendapatkan ID kategori 'Bandung' dari tabel categories
        $semarangCategoryId = Category::where('name', 'Semarang')->value('id');

        // Ambil data dari tabel 'destinasi' berdasarkan category_id
        $destinasiSemarang = Destinasi::where('category_id', $semarangCategoryId)->get();

        // Kirim data ke view
        return view('destinasi.semarang.semarang', compact('destinasiSemarang'));
    }

    public function show($slug)
    {
        // Ambil data destinasi berdasarkan ID
        $destinasi = Destinasi::with('category', 'images')->where('slug', $slug)->firstOrFail();

        // Kirim data ke view detail
        return view('destinasi.semarang.wisata.index', compact('destinasi'));
    }
}
