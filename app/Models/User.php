<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

<<<<<<< HEAD
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Tambahkan kolom role di sini
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
=======
    protected $fillable = [
        'name',
        'email',
        'noHp',
>>>>>>> 8ae3a0f1354c373eff910b6bac57f61f28c0889f
        'password',
    ];

    public function index()
    {
        $users = User::all(); // Mengambil semua pengguna
        return view('dashboard.users.index', compact('users')); // Mengirim data ke view
    }
}
