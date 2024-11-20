<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class ekstrakulikuler extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'image'];

    protected static function booted()
    {
        static::deleting(function ($ekstrakulikuler) {
            if ($ekstrakulikuler->image) {
                Storage::disk('public')->delete($ekstrakulikuler->image);
            }
        });
    }
}
