<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepsek extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'nama', 'image'];
}
