<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class JakartaController extends Controller
{
    public function index()
    {
        // Mendapatkan ID kategori 'Bandung' dari tabel categories
        $jakartaCategoryId = Category::where('name', 'Jakarta')->value('id');

        // Ambil data dari tabel 'destinasi' berdasarkan category_id
        $destinasiJakarta = Destinasi::where('category_id', $jakartaCategoryId)->get();

        // Kirim data ke view
        return view('destinasi.jakarta.jakarta', compact('destinasiJakarta'));
    }

    public function show($slug)
    {
        // Ambil data destinasi berdasarkan ID
        $destinasi = Destinasi::with('category', 'images')->where('slug', $slug)->firstOrFail();

        // Kirim data ke view detail
        return view('destinasi.jakarta.wisata.index', compact('destinasi'));
    }
}
