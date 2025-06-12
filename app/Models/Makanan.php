<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'daftar_makanan';

    protected $fillable = [
        'merkmakanan',
        'hargamakanan',
        'tersedia',
        'berat',
    ];
}
