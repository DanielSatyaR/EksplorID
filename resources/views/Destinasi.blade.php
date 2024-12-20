<!DOCTYPE html>
<html lang="en">

<x-header></x-header>

<body>

    <!-- -----------------------------------------Navbar---------------------------------------------------------->

   <x-Navbar></x-Navbar>


    <!-- ------------------------------------------Konten----------------------------------------------------- -->

    <div class="Konten">
        <div class="container mx-auto max-w-1xl px-4 sm:px-6 lg:px-8">
            <div class="text1">
                <h1> Temukan tempat-tempat di sekitar </h1>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Card 1 -->
                <a href="/bali" class="block">
                    <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                        <img src="img/Bali.jpeg" alt="Jakarta" class="w-full h-full object-cover">
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

                    <!-- Card 4 -->
                    <a href="/bandung" class="block">
                        <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                            <img src="img/Bandung.jpg" alt="Jakarta" class="w-full h-full object-cover">
                            <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Bandung</div>
                        </div>
                    </a>
                    <!-- Card 5 -->
                    <a href="/malang" class="block">
                        <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                            <img src="img/malang.png" alt="Jakarta" class="w-full h-full object-cover">
                            <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Malang</div>
                        </div>
                    </a>

                    <!-- Card 6 -->
                    <a href="/semarang" class="block">
                        <div class="relative w-full h-48 rounded-xl overflow-hidden shadow-md">
                            <img src="img/semarang.jpg" alt="Jakarta" class="w-full h-full object-cover">
                            <div class="absolute bottom-2 left-2 bg-opacity-50 text-white text-lg font-semibold px-3 py-1 rounded">Semarang</div>
                        </div>
                    </a>
            </div>
        </div>

<x-footer></x-footer>


</body>

</html>