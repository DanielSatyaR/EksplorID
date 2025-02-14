<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function destinasi(): HasMany
    {
        return $this->hasMany(Destinasi::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'name']
        ];
    }
}
