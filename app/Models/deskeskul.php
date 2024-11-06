<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deskeskul extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'alasan','image'];
}
