<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class berita extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category_id', 'judul','slug', 'deskripsi', 'image','is_active'];

    protected $casts = [
        'image' => 'array',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    protected static function booted()
    {
        static::deleting(function ($berita) {
            if ($berita->image) {
                Storage::disk('public')->delete($berita->image);
            }
        });
    }
}
