<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class deskeskul extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'alasan','image'];

    protected static function booted()
    {
        static::deleting(function ($deskeskul) {
            if ($deskeskul->image) {
                Storage::disk('public')->delete($deskeskul->image);
            }
        });
    }
}
