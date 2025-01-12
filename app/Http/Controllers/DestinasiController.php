<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destinasi;
use App\Models\DestinasiImages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    public function index()
    {
        $destinasiWisata = Destinasi::with('images')->get();
        return view('dashboard.destinasi-wisata.destinasi', [
            'destinasiWisata' => $destinasiWisata,
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
            'images.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
        ]);

        $validatedData['price'] = $request->input('price');
        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['description']), 200);

        $destinasi = Destinasi::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('destinasi-images', 'public');
                $destinasi->images()->create(['image' => $imagePath]);
            }
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
            'price' => 'required|numeric|min:0',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Update data ke dalam database
        $validatedData['price'] = $request->input('price');
        $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['description']), 200);
        $destinasi->update($validatedData);

        // Menyimpan gambar baru jika ada
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if (!$image->isValid()) {
                    // Catat error jika ada masalah dengan gambar
                    error_log('Gagal mengunggah gambar: ' . $image->getErrorMessage());
                    continue; // Lewati gambar yang gagal
                }

                // Simpan gambar jika valid
                $imagePath = $image->store('destinasi-images', 'public');
                $destinasi->images()->create(['image' => $imagePath]);

                // Catat gambar yang berhasil disimpan
                error_log('Gambar berhasil disimpan: ' . $image->getClientOriginalName());
            }
        }

        // Redirect kembali ke halaman dashboard dengan pesan sukses
        return redirect('/dashboard/destinasi-wisata')->with('success', 'Destinasi berhasil diperbarui!');
    }

    public function destroy(Destinasi $destinasi)
    {
        // Hapus gambar jika ada
        foreach ($destinasi->images as $image) {
            Storage::delete('public/' . $image->image);
            $image->delete();
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
