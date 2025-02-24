<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['nama_produk' => 'Jersey Liverpool', 'kategori' => 'Alat Olahraga', 'harga_beli' => 1250000, 'harga_jual' => 1625000, 'stok' => 120, 'image' => 'jersey.png'],
            ['nama_produk' => 'Dumbbell 5kg', 'kategori' => 'Alat Olahraga', 'harga_beli' => 80000, 'harga_jual' => 104000, 'stok' => 25, 'image' => 'dumbbell.png'],
            ['nama_produk' => 'Yoga Mat', 'kategori' => 'Alat Olahraga', 'harga_beli' => 120000, 'harga_jual' => 156000, 'stok' => 30, 'image' => 'yoga-mat.png'],
            ['nama_produk' => 'Gitar Akustik', 'kategori' => 'Alat Musik', 'harga_beli' => 1000000, 'harga_jual' => 1300000, 'stok' => 10, 'image' => 'gitar.png'],
            ['nama_produk' => 'Drum Set', 'kategori' => 'Alat Musik', 'harga_beli' => 2200000, 'harga_jual' => 2860000, 'stok' => 5, 'image' => 'drum.png'],
            ['nama_produk' => 'Bola Basket', 'kategori' => 'Alat Olahraga', 'harga_beli' => 60000, 'harga_jual' => 78000, 'stok' => 40, 'image' => 'bola.png'],
            ['nama_produk' => 'Piano Elektrik', 'kategori' => 'Alat Musik', 'harga_beli' => 3000000, 'harga_jual' => 3900000, 'stok' => 3, 'image' => 'piano.png'],
            ['nama_produk' => 'Treadmill', 'kategori' => 'Alat Olahraga', 'harga_beli' => 2000000, 'harga_jual' => 2600000, 'stok' => 7, 'image' => 'treadmill.png'],
            ['nama_produk' => 'Biola', 'kategori' => 'Alat Musik', 'harga_beli' => 1400000, 'harga_jual' => 1820000, 'stok' => 8, 'image' => 'biola.png'],
            ['nama_produk' => 'Sepatu Lari', 'kategori' => 'Alat Olahraga', 'harga_beli' => 200000, 'harga_jual' => 260000, 'stok' => 20, 'image' => 'sepatu.png'],
        ]);

        echo "Seeder ProductSeeder berhasil dijalankan!\n";
    }
}
