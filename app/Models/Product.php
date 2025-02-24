<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products'; // Nama tabel di database
    protected $fillable = [
        'nama_produk',
        'kategori',
        'harga_beli',
        'harga_jual',
        'stok',
        'image',
    ];
}
