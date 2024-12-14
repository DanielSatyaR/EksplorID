<!DOCTYPE html>
<html lang="en">

<x-header></x-header>

<body>

    <x-Navbar> </x-Navbar>

    <!--------------------------------------------KONTEN----------------------------------------------  -->

        <!-- kopnten -->
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
                        <div class="border-t mt-4 pt-2 flex justify-between">
                            <span>Total:</span>
                            <span class="font-bold text-red-500">Rp.27.000</span>
                        </div>
                    </div>
                </div>

                <!-- Total Pembayaran -->
                <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow">
                    <h2 class="text- font-bold mb-4">Total Pembayaran</h2>
                    <p class="flex justify-between">
                        <span>1 item</span>
                        <span class="font-bold text-red-500">Rp.27.000</span>
                    </p>
                    <a href="/pesanan" class="w-full bg-blue-500 text-white mt-4 py-2 rounded-lg hover:bg-blue-700 text-center block">
                        Lanjut Pembayaran
                    </a>
                </div>
            </div>
        </div>

    </body>

</html>