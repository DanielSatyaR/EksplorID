<!DOCTYPE html>
<html lang="en">


<x-header></x-header>

<body>
    
<x-Navbar></x-Navbar>

<!-- BANNER -->

<div class="relative">
    <img src="img/holidaybanner.jpg" alt="Background Image" class="w-full h-auto object-cover">
    <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-center bg-black bg-opacity-50">
        <h1 class="text-white text-4xl font-bold">EKSPLORE IMPIANMU</h1>
        <p class="text-white text-xl mt-2">Buatlah pengalaman serumu</p>
        <div class="mt-4 flex space-x-4">
            <input type="text" placeholder="Jakarta" class="border-none p-3 rounded-lg w-72">
            <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Cari</button>
        </div>
    </div>
</div>


    <!-- --------------------------------KONTENT------------------------------------------- -->


    <div class="konten">
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-5 lg:max-w-7xl lg:px-8">
                <div class="text1">
                    <h1>Aktivitas Trending di Bandung</h1>
                    <a href="/bandung" class="text-1xl text-right mb-6 block">Lainnya &gt;&gt;</a>
                    <div class="mx-auto max-w-5xl px-2 py-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <a href="/bandung/dagodream" class="group">
                            <img src="img/dagodream.jpg" alt="Dagodream" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                            <h2 class="mt-1 text-lg font-medium text-gray-900">Dago Dreampark Bandung</h2>
                            <p class="mt-4 text-sm text-gray-700">Lembang, Kab.Bandung Barat</p>
                            <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
                        </a>
                        <a href="/bandung/dranch" class="group">
                            <img src="img/dranch.jpeg" alt="Dranch" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                            <h2 class="mt-1 text-lg font-medium text-gray-900">D'ranch Bandung</h2>
                            <p class="mt-4 text-sm text-gray-700">Lembang, Kab.Bandung Barat</p>
                            <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>

                        </a>
                        <a href="/bandung/kawahputih" class="group">
                            <img src="img/kawah.jpeg" alt="Kawahputih" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                            <h2 class="mt-1 text-lg font-medium text-gray-900">Kawah Putih Bandung</h2>
                            <p class="mt-4 text-sm text-gray-700">Lembang, Kab.Bandung Barat</p>
                            <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
                        </a>
                        <a href="/bandung/dagodream" class="group">
                            <img src="img/floating.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                            <h2 class="mt-1 text-lg font-medium text-gray-900">Floating Market Bandung</h2>
                            <p class="mt-4 text-sm text-gray-700">Lembang, Kab.Bandung Barat</p>
                            <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ----------------------------------------KONTEN 2--------------------------------------------- -->

    <div class="Konten2">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold text-left mb-6">Temukan Liburan di kota lainnya</h1>
            <a href="/destinasi" class="text-1xl text-right mb-6 block">Lainnya &gt;&gt;</a>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <a href="/bali" class="block">
                    <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                        <img src="img/Bali.jpeg" alt="Bali" class="w-full h-full object-cover">
                        <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Bali</div>
                    </div>
                </a>
                <!-- Card 2 -->
                <a href="/jakarta" class="block">
                    <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                        <img src="img/Jakarta.jpg" alt="Jakarta" class="w-full h-full object-cover">
                        <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Jakarta</div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="/yogya" class="block">
                    <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                        <img src="img/Yogya.png" alt="Jakarta" class="w-full h-full object-cover">
                        <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Yogyakarta</div>
                    </div>
                </a>
            </div>
        </div>
<!----------------------------------------------KONTEN 3 ------------------------------------------------------>

        <div class="Konten2">
            <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <h1 class="text-2xl font-bold text-left mb-6">Kenapa EksplorID</h1>
                <div class="card-container">
                    <div class="card">
                        <img src="img/shield.png" alt="Pembayaran Aman" class="card-icon">
                        <h2>Pembayaran aman dan nyaman</h2>
                        <p> Nikmati transaksi dengan keamanan berlapis, dengan opsi pembayaran yang lebih dari satu</p>
                    </div>
                    <div class="card">
                        <img src="img/order.png" alt="Pemesanan Fleksibel" class="card-icon">
                        <h2>Pemesanan cepat & fleksibel</h2>
                        <p> Pesan tiket online dalam hitungan menit, dengan pembatalan gratis untuk banyak aktivitas</p>
                    </div>
                    <div class="card">
                        <img src="img/xperience.png" alt="Pengalaman Seru" class="card-icon">
                        <h2>Pengalaman seru</h2>
                        <p> Pengalaman liburan yang sangat menyenangkan, dan tidak akan pernah bosan</p>
                    </div>
                </div>
            </div>

<!-- ---------------------------------------------FOOTER------------------------------------------------------> 

<x-footer></x-footer>

</body>

</html>