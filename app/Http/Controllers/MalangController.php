<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class MalangController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        // Mendapatkan ID kategori 'Bandung' dari tabel categories
        $malangCategoryId = Category::where('name', 'Malang')->value('id');

        // Ambil data dari tabel 'destinasi' berdasarkan category_id
        $destinasiMalang = Destinasi::where('category_id', $malangCategoryId)->get();

        // Kirim data ke view
        return view('destinasi.malang.malang', compact('destinasiMalang'));
    }

    public function show($slug)
    {
        // Ambil data destinasi berdasarkan ID
        $destinasi = Destinasi::with('category', 'images')->where('slug', $slug)->firstOrFail();

        // Kirim data ke view detail
        return view('destinasi.malang.wisata.index', compact('destinasi'));
    }
}
