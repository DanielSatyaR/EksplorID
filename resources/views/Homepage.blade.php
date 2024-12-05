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
            <a href="/login" class="sign-in">Sign in</a>
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

<div class="konten">
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="text1">
                <h1>Aktivitas Trending di Bandung</h1>
                <h3> Lainnya >></h3>

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

        <!-- More products... -->
                </div>
             </div>
        </div>
    </div>
</div>
</body>
</html>