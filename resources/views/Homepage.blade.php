<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>EksplorID</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
<header class="navbar">
        <div class="logo">EksplorID</div>
        <nav>
            <ul>
                <li><a href="#">Destinasi</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="/login" class="sign-in">Log in</a>
            <a href="/create" class="create-account">Create Account</a>
        </div>
    </header>

    <div class="banner">
        <!-- Ganti "your-image.jpg" dengan jalur gambar latar Anda -->
        <img src="img/holidaybanner.jpg" alt="Background Image">
        <div class="banner-content">
            <h1>EKSPLORE IMPIANMU</h1>
            <p>Buatlah pengalaman serumu</p>
            <div class="search-box">
                <input type="text" placeholder="Jakarta">
                <button>Cari</button>
            </div>
        </div>
    </div>

<!-- --------------------------------KONTENT------------------------------------------- -->


<div class="konten">
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-5 lg:max-w-7xl lg:px-8">
            <div class="text1">
                <h1>Aktivitas Trending di Bandung</h1>
                <a href="#" class="text-1xl text-right mb-6 block">Lainnya &gt;&gt;</a>
            <div class="mx-auto max-w-5xl px-2 py-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="#" class="group">
                <img src="img/dagodream.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h2 class="mt-1 text-lg font-medium text-gray-900">Dago Dreampark Bandung</h2>
                <p class="mt-4 text-sm text-gray-700">Lembang, Kab.Bandung Barat</p>
                <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
            </a>
            <a href="#" class="group">
                <img src="img/dranch.jpeg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h2 class="mt-1 text-lg font-medium text-gray-900">D'ranch Bandung</h2>
                <p class="mt-4 text-sm text-gray-700">Lembang, Kab.Bandung Barat</p>
                <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>

            </a>
            <a href="#" class="group">
                <img src="img/kawah.jpeg" alt="Person using a pen to cross a task off a productivity paper card." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h2 class="mt-1 text-lg font-medium text-gray-900">Kawah Putih Bandung</h2>
                <p class="mt-4 text-sm text-gray-700">Lembang, Kab.Bandung Barat</p>
                <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
            </a>
            <a href="#" class="group">
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
        <a href="#" class="text-1xl text-right mb-6 block">Lainnya &gt;&gt;</a>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <a href="#" class="block">
            <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                <img src="img/Bali.jpeg" alt="Jakarta" class="w-full h-full object-cover">
                <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Bali</div>
            </div>
        </a>
            <!-- Card 2 -->
        <a href="#" class="block">
            <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                <img src="img/Jakarta.jpg" alt="Jakarta" class="w-full h-full object-cover">
                <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Jakarta</div>
            </div>
        </a>

            <!-- Card 3 -->
            <a href="#" class="block">
            <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                <img src="img/Yogya.png" alt="Jakarta" class="w-full h-full object-cover">
                <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Yogyakarta</div>
            </div>
        </a>
    </div>
</div>
<!----------------------------------------------KONTEN 3------------------------------------------------------>

<div class="Konten2">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-left mb-6">Temukan Liburan di kota lainnya</h1>
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

<footer class="footer">
    <div class="footer-container">
      <!-- Section 1 -->
      <div class="footer-section">
        <img src="logo-eksplorid.png" alt="EksplorID Logo" class="footer-logo">
        <p>Pembayaran</p>
        <div class="payment-logos">
          <img src="img/bca.jpg" alt="BCA">
          <img src="img/mandiri.jpg" alt="Mandiri">
          <img src="img/bni.png" alt="BNI">
        </div>
      </div>

      <!-- Section 2 -->
      <div class="footer-section">
        <h3>Follow Kami di</h3>
        <ul>
          <li>Facebook</li>
          <li>Instagram</li>
          <li>Twitter</li>
          <li>Tiktok</li>
        </ul>
      </div>

      <!-- Section 3 -->
      <div class="footer-section">
        <h3>Tentang EksplorID</h3>
        <ul>
          <li>Cara Pesan</li>
          <li>Hubungi Kami</li>
          <li>Pusat Bantuan</li>
          <li>Tentang Kami</li>
        </ul>
      </div>

      <!-- Section 4 -->
      <div class="footer-section">
        <h3>Download App</h3>
        <div class="app-logos">
          <img src="img/gp.png" alt="Google Play">
          <img src="img/app.png" alt="App Store">
        </div>
      </div>
    </div>
  </footer>

</body>
</html>