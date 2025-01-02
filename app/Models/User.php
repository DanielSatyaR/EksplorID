<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'noHp',
        'password',
    ];

    public function index()
    {
        $users = User::all(); // Mengambil semua pengguna
        return view('dashboard.users.index', compact('users')); // Mengirim data ke view
    }
}
