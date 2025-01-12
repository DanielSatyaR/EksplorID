<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'noHp',
        'google_id',
        'password',
    ];

    public function index()
    {
        $users = User::all(); // Mengambil semua pengguna
        return view('dashboard.users.index', compact('users')); // Mengirim data ke view
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
