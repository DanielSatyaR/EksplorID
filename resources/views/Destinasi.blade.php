<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Destinasi</title>
    <link rel="stylesheet" href="css/destinasi.css">
</head>
<body>

<!-- -----------------------------------------Navbar---------------------------------------------------------->


<div class="navbar">
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
</div>
<!-- ------------------------------------------Konten----------------------------------------------------- -->

    <div class="Konten">
    <div class="container mx-auto max-w-1xl py-16 px-4 sm:px-6 lg:px-8">
        <div class="text1">
            <h1> Temukan tempat-tempat di sekitar </h1>
        </div>
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

            <!-- Card 4 -->
            <a href="#" class="block">
            <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                <img src="img/Bandung.jpg" alt="Jakarta" class="w-full h-full object-cover">
                <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Bandung</div>
            </div>
        </a>
            <!-- Card 5 -->
        <a href="#" class="block">
            <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                <img src="img/malang.png" alt="Jakarta" class="w-full h-full object-cover">
                <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Malang</div>
            </div>
        </a>

            <!-- Card 6 -->
            <a href="#" class="block">
            <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                <img src="img/semarang.jpg" alt="Jakarta" class="w-full h-full object-cover">
                <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Semarang</div>
            </div>
        </a>
    </div>
</div>
</body>
</html>