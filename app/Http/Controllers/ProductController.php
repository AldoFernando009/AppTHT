<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Filtering berdasarkan pencarian
        if ($request->has('search')) {
            $query->where('nama_produk', 'ILIKE', "%{$request->search}%");
        }

        // Filtering berdasarkan kategori
        if ($request->has('kategori') && $request->category !== '') {
            $query->where('kategori', $request->category);
        }

        $products = $query->paginate(10);

        return view('produk', compact('products'));
    }

    // Menampilkan form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // menyimpan produk baru
    public function store(Request $request)
    {
        // dd($request->all()); // Cek data yang dikirim dari form
        // validasi input
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);

        // Hitung harga jual otomatis (harga beli + 30%)
        $harga_jual = $request->harga_beli * 1.3;

        // upload foto jika ada
        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;


        // simpan data ke database
        Product::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
            'image' => $imagePath,
        ]);


        return redirect()->route('products.index')->with('success', 'alert:Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); // Ambil data produk berdasarkan ID
        return view('edit', compact('product')); // Kirim ke view edit
    }

    public function update(Request $request, $id)
    {
        // dd($request->all()); // Cek data yang dikirim dari form

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_beli' => 'required|numeric',
            'kategori' => 'required|string',
            'stok' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,png|max:100',
        ]);


        $product = Product::findOrFail($id);

        // Jika ada gambar baru, upload dan ganti yang lama
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/products');
            $product->image = $imagePath;
        }

        // Update data produk
        $product->update([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_beli * 1.3, // Harga Jual = Harga Beli + 30%
            'stok' => $request->stok,
        ]);


        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
