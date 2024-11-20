<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class kepsek extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'nama', 'image'];

    protected static function booted()
    {
        static::deleting(function ($kepsek) {
            if ($kepsek->image) {
                Storage::disk('public')->delete($kepsek->image);
            }
        });
    }
}
