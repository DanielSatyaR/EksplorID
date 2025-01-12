<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.Kategori.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.kategori.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($validatedData);

        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('dashboard.kategori.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $kategori = Category::where('slug', $slug)->firstOrFail();

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $kategori->id,
            'slug' => 'required|unique:categories,slug,' . $kategori->id,
        ]);

        $kategori->update($validatedData);

        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($slug)
    {
        $kategori = Category::where('slug', $slug)->firstOrFail();
        $kategori->delete();

        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = Str::slug($request->name);
        return response()->json(['slug' => $slug]);
    }
}
