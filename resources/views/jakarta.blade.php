<!DOCTYPE html>
<html lang="en">

<x-header></x-header>

<body>

    <!-- ------------------------------------NAVBAR---------------------------------------- -->

    <x-Navbar> </x-Navbar>

    <!-- ----------------------------------------SEARCH----------------------------------------------- -->

    <div class="flex items-center justify-center space-x-4 py-5">
    <!-- Search Bar -->
    <input type="text" class="w-full md:w-1/3 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Yogyakarta">

    <!-- Destination Dropdown -->
    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option>Pilih Destinasi</option>
        <option value="jakarta">Jakarta</option>
        <option value="bali">Bali</option>
        <option value="malang">Malang</option>
        <option value="semarang">Semarang</option>
        <option value="yogyakarta">Yogyakarta</option>
    </select>
</div>

    <!------------------- ------------------BANNER--------------------------------------------------------->
    <div class="bg-gray-50 min-h-screen">
    <!-- Banner Image -->
    <div class="relative w-full h-72">
        <img src="img/jakarta2.jpg" alt="Banner Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex justify-center items-center">
            <h1 class="text-4xl text-white font-bold">Jakarta</h1>
        </div>
    </div>

   <!-- Main Content -->
   <div class="container mx-auto p-6 flex space-x-6">
        <!-- Filter Section -->
        <div class="w-1/4 bg-white p-4 shadow-md rounded-lg space-y-6">
            <!-- Sort Section -->
            <div>
                <h1 class="text-xl font-semibold mb-4">Sort</h1>
                <div class="space-y-2">
                    <label class="block">
                        <input type="radio" name="sort" value="popular" class="mr-2"> Popular
                    </label>
                    <label class="block">
                        <input type="radio" name="sort" value="price-high" class="mr-2"> Harga Tertinggi
                    </label>
                    <label class="block">
                        <input type="radio" name="sort" value="rating-high" class="mr-2"> Rating Tertinggi
                    </label>
                </div>
            </div>

            <!-- Harga Section -->
            <div>
                <h1 class="text-xl font-semibold mb-4">Harga</h1>
                <div class="flex justify-between text-gray-700 mb-2">
                    <span>Rp. 0</span>
                    <span>Rp. 500.000</span>
                </div>
                <input type="range" min="0" max="100" step="1" class="w-full">
            </div>

            <!-- Rating Section -->
            <div>
                <h1 class="text-xl font-semibold mb-4">Star Rating</h1>
                <div class="space-y-2">
                    <button class="w-full py-2 bg-gray-200 text-left px-3 rounded-md">★★★★★</button>
                    <button class="w-full py-2 bg-gray-200 text-left px-3 rounded-md">★★★★</button>
                    <button class="w-full py-2 bg-gray-200 text-left px-3 rounded-md">★★★</button>
                    <button class="w-full py-2 bg-gray-200 text-left px-3 rounded-md">★★</button>
                    <button class="w-full py-2 bg-gray-200 text-left px-3 rounded-md">★</button>
                    <button class="w-full py-2 bg-gray-200 text-left px-3 rounded-md">No Rating</button>
                </div>
            </div>
        </div>

        <!-- Product Section -->
        <div class="w-3/2 grid grid-cols-3 gap-3 flex flex-col h-72">
            <!-- Product Card -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <a href="/jakarta/TamanMini">
                    <img src="img/tmi.jpg" alt="Product Image" class="w-full h-48 object-cover rounded-lg mb-4">
                    <div class="text-lg font-semibold">Taman Mini Indonesia</div>
                    <div class="text-gray-500">Jakarta</div>
                    <div class="mt-2 text-xl font-semibold">Rp. 27.000</div>    
                </a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <a href="/jakarta/dufan">
                    <img src="img/dufan.png" alt="Product Image" class="w-full h-48 object-cover rounded-lg mb-4">
                    <div class="text-lg font-semibold">Dunia Fantasi</div>
                    <div class="text-gray-500">Jakarta</div>
                    <div class="mt-2 text-xl font-semibold">Rp. 27.000</div>
                </a>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <a href="/jakarta/aquarium"> 
                    <img src="img/jktaqua.jpeg" alt="Product Image" class="w-full h-48 object-cover rounded-lg mb-4">
                    <div class="text-lg font-semibold">Jakarta Aquarium Safari</div>
                    <div class="text-gray-500">Jakarta</div>
                    <div class="mt-2 text-xl font-semibold">Rp. 27.000</div>
                </a> 
            </div>
        </div>
    </div>
</div>

</body>
</html>