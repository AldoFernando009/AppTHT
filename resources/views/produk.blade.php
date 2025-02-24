<x-layout>


    <h2 class="text-2xl font-bold mb-4">Daftar Produk</h2>

    <!-- Start Filter dan Tombol -->

    <div class="flex justify-between items-center mb-4">
        <form method="get" class="flex space-x-2">
            <div class="relative mr-7">
                <input type="text" name="search" placeholder="Cari produk..."
                    class="pl-10 pr-24 py-2 border rounded w-full" value="{{ request('search') }}">
                <svg class="absolute left-3 top-1/2 transform
                    -translate-y-1/2 h-5 w-5 text-gray-400"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35M16 10a6 6 0 1 0-12 0 6 6 0 0 0 12 0z" />
                </svg>
            </div>
        </form>

        <select id="categoryFilter" class="p-2 mr-60 border rounded">
            <option value="" {{ request('kategori') == '' ? 'selected' : '' }}>Semua</option>
            <option value="Alat Olahraga" {{ request('kategori') == 'Alat Olahraga' ? 'selected' : '' }}>
                Alat Musik
            </option>
            <option value="Alat Musik" {{ request('kategori') == 'Alat Musik' ? 'selected' : '' }}>
                Alat Olahraga
            </option>
        </select>



        <div>
            <a href="#" class="bg-green-500 text-white px-4 py-2 rounded mr-2 relative"> <span><svg
                        class="absolute stroke-white mt-1.5" xmlns="http://www.w3.org/2000/svg" width="12"
                        height="12" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        <path d="M10 9H8"></path>
                        <path d="M16 13H8"></path>
                        <path d="M16 17H8"></path>
                    </svg></span>Export Excel</a>
            <a href="/tambahproduk" class="bg-red-500 text-white px-4 py-2 rounded">+ Tambah Produk</a>
        </div>
    </div>

    <!-- End Filter dan Tombol -->

    {{-- Start Table Produk --}}
    <table class="w-[1020px] border">
        <thead>
            <tr class="bg-slate-200">
                <th class="p-2">No</th>
                <th class="p-2">Image</th>
                <th class="p-2">Nama Produk</th>
                <th class="p-2">Kategori Produk</th>
                <th class="p-2">Harga Beli (Rp)</th>
                <th class="p-2">Harga Jual (RP)</th>
                <th class="p-2">Stok Produk</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
                <tr class="text-center">
                    <td>{{ $index + $products->firstItem() }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->kategori }}</td>
                    <td>{{ number_format($product->harga_beli, 0, ',', '.') }}</td>
                    <td>{{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                    <td>{{ $product->stok }}</td>
                    <td class="flex justify-between items-center p-2">
                        <a href="{{ route('products.edit', $product->id) }}"><svg
                                class="fill-blue-700 stroke-white stroke-2" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z">
                                </path>
                                <path d="m15 5 4 4"></path>
                            </svg></a>
                        | <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                            @csrf
                            <button type="submit"><i><svg class="fill-red-700 stroke-black stroke-2"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    </svg></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- End Table Produk --}}
    <div class="mt-4">
        {{ $products->links() }}
    </div>
    {{-- Start Pagnation --}}
    <div class="flex justify-between items-center mt-4">
        <span class="text-gray-700">Show 10 From 50</span>
        <div class="flex space-x-2">
            <a class="p-2" href="">
                < </a>
                    <a class="p-2" href="">1</a>
                    <a class="p-2" href="">2</a>
                    <a class="p-2" href="">...</a>
                    <a class="p-2" href="">5</a>
                    <a class="p-2" href="">></a>

        </div>

    </div>
    {{-- End Pagnation --}}


</x-layout>
