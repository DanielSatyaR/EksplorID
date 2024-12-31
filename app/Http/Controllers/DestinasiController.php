<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        return view('/dashboard.destinasi-wisata.destinasi');
    }

    public function create()
    {
        // return view('/dashboard.destinasi-wisata.create');
    }

    public function store(Request $request)
    {
        // 
    }

    public function show(Destinasi $destinasi)
    {
        // 
    }

    public function edit(Destinasi $destinasi)
    {
        // 
    }

    public function update(Request $request, Destinasi $destinasi)
    {
        // 
    }

    public function destroy(Destinasi $destinasi)
    {
        // 
    }
}
