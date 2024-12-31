<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destinasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        return view('dashboard.destinasi-wisata.destinasi', [
            'destinasiWisata' => Destinasi::where('author_id', $userId)->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.destinasi-wisata.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:destinasi',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|file|max:4024',
            'description' => 'required'
        ]);

        // Proses file gambar jika ada
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('destinasi-images');
        }

        // Tambahkan excerpt (cuplikan deskripsi)
        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['description']), 200);

        // Simpan data ke tabel `destinasi`
        Destinasi::create($validatedData);

        return redirect('/dashboard/destinasi-wisata')->with('success', 'New Destinasi Has Been Added!');
    }

    public function show(Destinasi $destinasi)
    {
        return view('dashboard.destinasi-wisata.show', [
            'destinasi' => $destinasi
        ]);
    }

    public function edit(Destinasi $destinasi)
    {
        return view('dashboard.destinasi-wisata.edit', [
            'destinasi' => $destinasi,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Destinasi $destinasi)
    {
        $rules = [
            'title' => 'required|max:255',
            'slug' => 'required|unique:destinasi',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|file|max:4024',
            'body' => 'required'
        ];

        if ($request->slug != $destinasi->slug) {
            $rules['slug'] = 'required|unique:destinasis';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($destinasi->image) {
                Storage::disk('public')->delete($destinasi->image);
            }
            $validatedData['image'] = $request->file('image')->store('post-images', 'public');
        }

        $validatedData['author_id'] = Auth::id();
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        $destinasi->update($validatedData);

        return redirect('/dashboard/destinasi-wisata')->with('success', 'Destinasi Has Been Updated!');
    }

    public function destroy(Destinasi $destinasi)
    {
        if ($destinasi->image) {
            Storage::disk('public')->delete($destinasi->image);
        }

        $destinasi->delete();

        return redirect('/dashboard/destinasi-wisata')->with('success', 'Destinasi Has Been Deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Destinasi::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
