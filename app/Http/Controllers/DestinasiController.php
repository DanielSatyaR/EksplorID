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
            'destinasiWisata' => Destinasi::all(),
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.destinasi-wisata.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:destinasi',
            'category_id' => 'required|exists:categories,id',
            'images' => 'required|array',
            'images.*' => 'image|file|max:4024',
            'description' => 'required',
        ]);

        $images = [];
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('destinasi-images', 'public');
            $images[] = ['image' => $imagePath];
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['description']), 200);

        $destinasi = Destinasi::create($validatedData);

        foreach ($images as $image) {
            $destinasi->images()->create($image);
        }

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
        $categories = Category::all();

        return view('dashboard.destinasi-wisata.edit', [
            'destinasi' => $destinasi,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Destinasi $destinasi)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:destinasi,slug,' . $destinasi->id,
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:4024',
        ]);

        if ($request->file('image')) {
            // Hapus gambar lama jika ada
            if ($destinasi->image) {
                Storage::delete('public/' . $destinasi->image);
            }

            // Simpan gambar baru ke folder `destinasi-images`
            $validatedData['image'] = $request->file('image')->store('destinasi-images', 'public');
        }

        // Update data ke dalam database
        $destinasi->update($validatedData);

        // Redirect kembali ke halaman dashboard dengan pesan sukses
        return redirect('/dashboard/destinasi-wisata')->with('success', 'Destinasi berhasil diperbarui!');
    }

    public function destroy(Destinasi $destinasi)
    {
        // Hapus gambar jika ada
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
