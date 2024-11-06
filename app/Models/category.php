<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = ['judul','slug','is_active'];

    public function beritas() {
        return $this->hasMany(Berita::class);
    }
}
