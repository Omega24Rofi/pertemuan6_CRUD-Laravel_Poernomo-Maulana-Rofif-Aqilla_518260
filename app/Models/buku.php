<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'judul',
        'penulis',
        'harga',
        'tgl_terbit',
    ];

}
