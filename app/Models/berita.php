<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class berita extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category_id', 'judul','slug', 'deskripsi', 'image','is_active'];

    protected $casts = [
        'image' => 'string',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
