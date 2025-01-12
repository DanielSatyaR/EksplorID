<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validasi data
        $request->validate([
            'destinasi_id' => 'required|exists:destinasi,id',
        ]);

        // Tambahkan ke keranjang
        Cart::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'destinasi_id' => $request->destinasi_id,
            ]
        );

        return redirect()->route('cart.index')->with('success', 'Destinasi berhasil ditambahkan ke keranjang!');
    }

    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())
            ->with(['destinasi.mainImage', 'destinasi.category'])
            ->get();

        return view('keranjang', compact('carts'));
    }

    public function remove(Cart $cart)
    {
        $cart->delete();

        return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus dari keranjang!');
    }
}
