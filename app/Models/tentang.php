<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class tentang extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'image'];

    protected static function booted()
    {
        static::deleting(function ($tentang) {
            if ($tentang->image) {
                Storage::disk('public')->delete($tentang->image);
            }
        });
    }
}
