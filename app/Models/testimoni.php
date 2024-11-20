<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class testimoni extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'keterangan','deskripsi', 'image'];

    protected static function booted()
    {
        static::deleting(function ($testimoni) {
            if ($testimoni->image) {
                Storage::disk('public')->delete($testimoni->image);
            }
        });
    }
}
