<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class choice extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'image'];

    protected static function booted()
    {
        static::deleting(function ($choice) {
            if ($choice->image) {
                Storage::disk('public')->delete($choice->image);
            }
        });
    }
}
