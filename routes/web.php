<?php

namespace App\Models\product;

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
});

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/produk', function () {
        return view('produk');
    });
});

Route::get('/produk', function () {
    return view('produk');
});

Route::resource('products', ProductController::class);

// Tampilkan Data ke View
Route::get('/produk', [ProductController::class, 'index'])->name('products.index');

// Route untuk menampilkan form tambah produk
Route::get('/tambahproduk', [ProductController::class, 'create'])->name('products.create');
Route::post('/produk', [ProductController::class, 'store'])->name('products.store');


// route untuk edit dan update
Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/{id}/update', [ProductController::class, 'update'])->name('products.update');

//route untuk hapus produk
Route::post('/produk/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/login', function () {
    return view('login');
});

Route::get('/tambahproduk', function () {
    return view('tambahproduk');
});

// Route::get('/updateproduk', function () {
//     return view('updateproduk');
// });


Route::get('/profil', function () {
    return view('profil');
});
