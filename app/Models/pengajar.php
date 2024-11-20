<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class pengajar extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'keterangan', 'image'];

    protected static function booted()
    {
        static::deleting(function ($pengajar) {
            if ($pengajar->image) {
                Storage::disk('public')->delete($pengajar->image);
            }
        });
    }
}
