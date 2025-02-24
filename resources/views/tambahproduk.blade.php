<x-layout>

    <h2 class="text-2xl font-bold mb-4"> <span class="text-gray-300">Daftar Produk</span> > Tambah Produk</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap gap-4 p-4">
            <div class="w-[300px]">
                <label for="" class="block text-gray-700 font-semibold mb-1">Kategori</label>
                <div class="flex items-center border rounded px-3 py-2 bg-white">
                    <select class="w-full focus:outline-none ml-2 text-gray-400" name="kategori" id="kategori_id">
                        <option value="" disabled selected hidden>Pilih
                            Kategori</option>
                        <option value="alat_olahraga">Alat Olahraga</option>
                        <option value="alat_musik">Alat Musik</option>
                    </select>
                </div>
            </div>

            <div class="w-[682px]">
                <label for="" class="block text-gray-700 font-semibold mb-1">Nama Barang</label>
                <div class="flex items-center border raounded px-3 py-2 bg-white">
                    <input name="nama_barang" class="w-full focus:outline-none ml-2" type="text"
                        placeholder="Masukan Nama Barang">
                </div>
            </div>

        </div>

        <div class="flex flex-wrap gap-4 p-4">
            <div class="w-[300px]">
                <label for="" class="block text-gray-700 font-semibold mb-1">Harga Beli</label>
                <div class="flex items-center border rounded px-3 py-2 bg-white">
                    <input name="harga_beli" id="harga_beli" type="number" class="w-full focus:outline-none ml-2"
                        placeholder="Masukan Harga Beli">
                </div>
            </div>
            <div class="w-[320px]">
                <label for="" class="block text-gray-700 font-semibold mb-1">Harga Jual</label>
                <div class="flex items-center border rounded px-3 py-2 bg-white">
                    <input name="harga_jual" type="number" id="harga_jual" class="w-full focus:outline-none ml-2"
                        placeholder="Masukan Harga Jual" readonly>
                </div>
            </div>

            <div class="w-[348px]">
                <label for="" class="block text-gray-700 font-semibold mb-1">Stok</label>
                <div class="flex items-center border rounded px-3 py-2 bg-white">
                    <input name="stok" type="number" class="w-full focus:outline-none ml-2"
                        placeholder="Masukan stok barang">
                </div>
            </div>

        </div>
        <label class="block text-gray-700 mb-2  p-4">Upload Image</label>
        <div class="flex flex-wrap gap-4 p-4 ">
            <div class="w-[1000px]">

                <div
                    class="w-full h-40 flex flex-col items-center justify-center border-2 border-dashed border-blue-400 rounded-lg cursor-pointer">
                    <!-- Preview Gambar -->
                    <img id="imagePreview" class="w-32 h-32 object-cover hidden" />

                    <!-- Input Upload -->

                    <label class="cursor-pointer items-center flex-col  text-blue-600 px-4 py-2">
                        <span class="bg-[url(https://cdn-icons-png.flaticon.com/512/1829/1829586.png)]"></span>
                        Drop file here or click to upload
                        <input name="image" type="file" id="uploadInput" class="hidden" accept="image/*"
                            onchange="previewImage(event)">
                    </label>
                </div>
            </div>
        </div>


        <div class="flex flex-wrap-reverse justify-end gap-4 p-4">
            <div
                class="w-40 h-10 flex items-center border border-blue-700 text-blue-700 rounded font-semibold text-center">
                <a href="/produk" class="m-auto">Batalkan</a>
            </div>
            <div
                class="w-40 h-10 flex items-center bg-blue-600 rounded border border-blue-700 text-white font-semibold text-center">
                <button type="submit" class="m-auto">Simpan</button>
            </div>
        </div>


    </form>


</x-layout>
