<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pesan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_depan','nama_belakang','email','no_telp','judul','pesan'];
}
