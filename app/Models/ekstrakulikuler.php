<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ekstrakulikuler extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'image'];
}
