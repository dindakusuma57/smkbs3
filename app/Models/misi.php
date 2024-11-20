<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class misi extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'image'];

    protected static function booted()
    {
        static::deleting(function ($misi) {
            if ($misi->image) {
                Storage::disk('public')->delete($misi->image);
            }
        });
    }
}
