<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class BandungController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        // Mendapatkan ID kategori 'Bandung' dari tabel categories
        $bandungCategoryId = Category::where('name', 'Bandung')->value('id');

        // Ambil data dari tabel 'destinasi' berdasarkan category_id
        $destinasiBandung = Destinasi::where('category_id', $bandungCategoryId)->get();

        // Kirim data ke view
        return view('destinasi.bandung.bandung', compact('destinasiBandung', 'categories'));
    }

    public function show($slug)
    {
        // Ambil data destinasi berdasarkan ID
        $destinasi = Destinasi::with('category', 'images')->where('slug', $slug)->firstOrFail();

        // Kirim data ke view detail
        return view('destinasi.bandung.wisata.index', compact('destinasi'));
    }
}
