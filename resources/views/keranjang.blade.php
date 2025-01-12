<x-header></x-header>

<body>
    <x-Navbar></x-Navbar>

    <!--------------------------------------------KONTEN----------------------------------------------  -->
    <div class="container mx-auto p-6">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Cart Items -->
            <div class="flex-1 bg-white p-6 rounded-lg shadow">
                <h2 class="text-lg font-bold mb-4">Keranjang Kamu</h2>

                @if ($carts->isEmpty())
                <p>Keranjang Kamu kosong.</p>
                @else
                @foreach ($carts as $cart)
                <!-- Item -->
                <div class="border rounded-lg p-4 mb-4 shadow-sm" id="cart-item-{{ $cart->id }}">
                    <div class="flex items-start gap-4">
                        <img src="{{ $cart->destinasi->mainImage ? asset('storage/' . $cart->destinasi->mainImage->image) : 'img/default.jpg' }}" alt="dagodream" class="w-[100px] h-[100px] object-cover rounded-lg">
                        <div class="flex-1">
                            <h3 class="font-bold">{{ $cart->destinasi->title }}</h3>
                            <p class="text-gray-500 text-sm">{{ $cart->destinasi->category->name }}</p>
                            <p class="text-gray-600 text-sm">
                                <i class="far fa-calendar-alt mr-1"></i>{{ now()->format('l, d F Y') }}
                            </p>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <form method="POST" action="{{ route('cart.remove', $cart->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 text-sm flex items-center gap-1 hover:text-red-700">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-900">Jumlah Tiket :</span>
                        <div class="flex items-center gap-2">
                            <button class="decrement border px-2 py-1 text-gray-600 hover:bg-gray-100 rounded-lg" data-cart-id="{{ $cart->id }}">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span class="jumlah-tiket text-lg font-bold w-8 text-center border px-2">1</span>
                            <button class="increment border px-2 py-1 text-gray-600 hover:bg-gray-100 rounded-lg" data-cart-id="{{ $cart->id }}">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="border-t mt-4 pt-2 flex justify-between">
                        <span>Total :</span>
                        <span class="total-harga font-bold text-red-500" data-price="{{ $cart->destinasi->price }}">
                            Rp.{{ $cart->destinasi->price }}
                        </span>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

            <!-- Total Pembayaran -->
            <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow">
                <h2 class="font-bold mb-4">Total Pembayaran</h2>
                <div id="total-item-list"></div> <!-- Tempat untuk daftar tiket yang ditambahkan -->
                <p class="flex justify-between">
                    <span id="total-item">Total :</span>
                    <span id="grand-total" class="font-bold text-red-500">Rp.0</span>
                </p>
                <a href="/pesanan" id="checkout-btn" class="w-full bg-blue-500 text-white mt-4 py-2 rounded-lg hover:bg-blue-700 text-center block">
                    Lanjut Pembayaran
                </a>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cartItems = document.querySelectorAll('[id^="cart-item-"]');
            let grandTotal = 0; // Variabel untuk menghitung total pembayarannya
            const totalItemListElement = document.getElementById('total-item-list');
            totalItemListElement.innerHTML = ''; // Kosongkan daftar total item saat pertama kali memuat halaman

            // Looping melalui setiap item keranjang
            cartItems.forEach(item => {
                const price = parseInt(item.querySelector('.total-harga').dataset.price); // Ambil harga destinasi
                const jumlahTiketElement = item.querySelector('.jumlah-tiket'); // Elemen untuk menampilkan jumlah tiket
                const incrementButton = item.querySelector('.increment'); // Tombol tambah tiket
                const decrementButton = item.querySelector('.decrement'); // Tombol kurang tiket
                const totalHargaElement = item.querySelector('.total-harga'); // Elemen untuk menampilkan total harga per item
                const itemId = item.id.replace('cart-item-', ''); // Ambil ID cart
                let jumlahTiket = 1; // Jumlah tiket per item

                // Fungsi untuk memperbarui harga dan total
                const updateTotal = () => {
                    const totalHarga = price * jumlahTiket; // Hitung total harga per item
                    jumlahTiketElement.textContent = jumlahTiket; // Update jumlah tiket
                    totalHargaElement.textContent = `Rp.${totalHarga.toLocaleString('id-ID')}`; // Update total harga per item

                    // Hitung ulang grandTotal
                    grandTotal = 0; // Reset grandTotal sebelum menghitung ulang
                    totalItemListElement.innerHTML = ''; // Kosongkan daftar tiket saat memperbarui total

                    // Tambahkan setiap item dengan jumlah tiket ke daftar total item
                    cartItems.forEach(cartItem => {
                        const itemHarga = parseInt(cartItem.querySelector('.total-harga').dataset.price);
                        const itemJumlahTiket = parseInt(cartItem.querySelector('.jumlah-tiket').textContent);
                        grandTotal += itemHarga * itemJumlahTiket; // Tambah harga per item ke total

                        // Tambahkan tiket ke daftar
                        const itemText = document.createElement('div');
                        itemText.textContent = `${itemJumlahTiket} tiket (${(itemHarga * itemJumlahTiket).toLocaleString('id-ID')})`;
                        totalItemListElement.appendChild(itemText);
                    });

                    // Update total pembayarannya
                    document.getElementById('grand-total').textContent = `Rp.${grandTotal.toLocaleString('id-ID')}`;
                };

                // Fungsi untuk menambah jumlah tiket
                incrementButton.addEventListener('click', () => {
                    jumlahTiket += 1; // Tambah jumlah tiket
                    updateTotal(); // Update total harga
                });

                // Fungsi untuk mengurangi jumlah tiket
                decrementButton.addEventListener('click', () => {
                    if (jumlahTiket > 1) { // Pastikan jumlah tiket tidak kurang dari 1
                        jumlahTiket -= 1; // Kurangi jumlah tiket
                        updateTotal(); // Update total harga
                    }
                });

                updateTotal(); // Panggil fungsi untuk pertama kali untuk memperbarui tampilan
            });
        });
    </script>
</body>