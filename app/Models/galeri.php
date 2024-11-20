<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class galeri extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'image'];

    protected static function booted()
    {
        static::deleting(function ($galeri) {
            if ($galeri->image) {
                Storage::disk('public')->delete($galeri->image);
            }
        });
    }
}
