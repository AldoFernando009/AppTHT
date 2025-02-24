<script>
    // upload gambar
    function previewImage(event) {
        const image = document.getElementById('imagePreview');
        image.src = URL.createObjectURL(event.target.files[0]);
        image.classList.remove('hidden');
    }



    // filter 
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("categoryFilter").addEventListener("change", function() {
            let selectedCategory = this.value;
            console.log("Kategori dipilih:", selectedCategory); // Debugging

            let url = new URL(window.location.href);
            if (selectedCategory) {
                url.searchParams.set("kategori", selectedCategory);
            } else {
                url.searchParams.delete("kategori");
            }
            console.log("Redirect ke:", url.toString()); // Debugging
            window.location.href = url.toString();
        });
    });


    // Harga jual otomatis bertambah 30%
    document.getElementById("harga_beli").addEventListener("input", function() {
        let hargaBeli = parseFloat(this.value) || 0;
        let hargaJual = hargaBeli * 1.3;
        document.getElementById("harga_jual").value = hargaJual.toFixed(2);
    });
</script>
