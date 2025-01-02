<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $users = User::all();

        // Kirim data $users ke view
        return view('dashboard.users', compact('users'));
    }

    public function destroy($id)
    {
        // Temukan user berdasarkan ID
        $user = User::findOrFail($id);

        // Hapus user
        $user->delete();

        // Redirect kembali ke daftar user dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'User Berhasil Dihapus.');
    }
}
