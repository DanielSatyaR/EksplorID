<x-header></x-header>

<body>
    <x-Navbar></x-Navbar>

    <!--------------------------------------------KONTEN----------------------------------------------  -->
    <div class="container mx-auto p-6">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Cart Items -->
            <div class="flex-1 bg-white p-6 rounded-lg shadow">
                <h2 class="text-lg font-bold mb-4">Keranjang Kamu (1)</h2>

                <!-- Item -->
                <div class="border rounded-lg p-4 mb-4 shadow-sm">
                    <div class="flex items-start gap-4">
                        <img src="img/dagodream.jpg" alt="dagodream" class="w-[100px] h-[100px] object-cover rounded-lg">
                        <div class="flex-1">
                            <h3 class="font-bold">Tiket Dago Dreampark Bandung</h3>
                            <p class="text-gray-500 text-sm">Bandung</p>
                            <p class="text-gray-600 text-sm">1 Orang</p>
                            <p class="text-gray-600 text-sm">
                                <i class="far fa-calendar-alt mr-1"></i> Rabu, 4 Desember 2024
                            </p>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <button class="text-blue-500 text-sm flex items-center gap-1 hover:text-blue-700">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="text-red-500 text-sm flex items-center gap-1 hover:text-red-700">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-600">Jumlah Tiket:</span>
                        <div class="flex items-center gap-2">
                            <button id="decrement" class="border px-2 py-1 text-gray-600 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span id="jumlah-tiket" class="text-lg font-bold w-8 text-center border px-2">1</span>
                            <button id="increment" class="border px-2 py-1 text-gray-600 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="border-t mt-4 pt-2 flex justify-between">
                        <span>Total:</span>
                        <span id="total-harga" class="font-bold text-red-500">Rp.27.000</span>
                    </div>
                </div>
            </div>

            <!-- Total Pembayaran -->
            <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow">
                <h2 class="font-bold mb-4">Total Pembayaran</h2>
                <p class="flex justify-between">
                    <span id="total-item">1 item</span>
                    <span id="grand-total" class="font-bold text-red-500">Rp.27.000</span>
                </p>
                <a href="/pesanan" id="checkout-btn" class="w-full bg-blue-500 text-white mt-4 py-2 rounded-lg hover:bg-blue-700 text-center block">
                    Lanjut Pembayaran
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hargaPerTiket = 27000; // Harga per tiket dalam Rupiah
            let jumlahTiket = 1;

            const jumlahTiketElement = document.getElementById('jumlah-tiket');
            const totalHargaElement = document.getElementById('total-harga');
            const totalItemElement = document.getElementById('total-item');
            const grandTotalElement = document.getElementById('grand-total');
            const incrementButton = document.getElementById('increment');
            const decrementButton = document.getElementById('decrement');
            const checkoutBtn = document.getElementById('checkout-btn');

            // Fungsi untuk memperbarui total harga
            const updateTotal = () => {
                const totalHarga = hargaPerTiket * jumlahTiket;
                jumlahTiketElement.textContent = jumlahTiket;
                totalHargaElement.textContent = `Rp.${totalHarga.toLocaleString('id-ID')}`;
                totalItemElement.textContent = `${jumlahTiket} item`;
                grandTotalElement.textContent = `Rp.${totalHarga.toLocaleString('id-ID')}`;
            };

            // Tambah tiket
            incrementButton.addEventListener('click', () => {
                jumlahTiket += 1;
                updateTotal();
            });

            // Kurang tiket
            decrementButton.addEventListener('click', () => {
                if (jumlahTiket > 1) {
                    jumlahTiket -= 1;
                    updateTotal();
                }
            });

            // Simpan data ke localStorage saat checkout
            checkoutBtn.addEventListener('click', () => {
                localStorage.setItem('jumlahTiket', jumlahTiket);
                localStorage.setItem('totalHarga', hargaPerTiket * jumlahTiket);
            });

            // Inisialisasi tampilan
            updateTotal();
        });
    </script>
</body>