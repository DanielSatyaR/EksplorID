<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Destinasi extends Model
{
    use Sluggable, HasFactory;

    protected $table = 'destinasi';

    protected $fillable = ['title', 'slug', 'category_id', 'description', 'image', 'excerpt'];

    protected $with = ['category'];

    protected $appends = ['excerpt'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relasi dengan DestinasiImages (gambar)
    public function images()
    {
        return $this->hasMany(DestinasiImages::class);
    }

    /**
     * Scope untuk filter query berdasarkan parameter pencarian.
     */
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where('title', 'like', '%' . e($search) . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'title']
        ];
    }

    public function getExcerptAttribute()
    {
        return \Illuminate\Support\Str::limit(strip_tags($this->description), 200);
    }
}
