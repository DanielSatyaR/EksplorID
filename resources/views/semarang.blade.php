<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Semarang</title>
    <link rel="stylesheet" href="css/jakarta.css">
</head>
<body>

<!-- ------------------------------------NAVBAR---------------------------------------- -->

<div class="navbar">
        <div class="logo">EksplorID</div>
        <nav>
            <ul>
                <li><a href="/destinasi">Destinasi</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="/login" class="sign-in">Log in</a>
            <a href="/createacc" class="create-account">Create Account</a>
        </div>
        <div class="cart">
            <a href="#">
                <img src="img/cart.png" alt="cart" width="40px">
            </a>
        </div>
    </div>
</div>

<!-- ----------------------------------------SEARCH----------------------------------------------- -->

     <!-- Search and Dropdown -->
     <div class="search-container">
        <input type="text" class="search-bar" placeholder="Bali">
        <select class="destination-dropdown">
            <option>Pilih Destinasi</option>
            <option value="jakarta">Jakarta</option>
            <option value="bali">Bali</option>
            <option value="malang">Malang</option>
            <option value="semarang">Semarang</option>
            <option value="yogyakarta">Yogyakarta</option>
        </select>
    </div>
    <!------------------- ------------------BANNER--------------------------------------------------------->
    <div class="banner">
        <img src="img/semarang1.jpg" alt="Kota Bandung">
        <div class="banner-konten">
            <h1> Semarang </h1>
            <p> Kota Semarang adalah ibu kota provinsi Jawa Tengah, Indonesia. Kota ini adalah kota metropolitan terbesar kelima di Indonesia setelah Jakarta, Surabaya, Medan, dan Bandung. </p>
        </div>
    </div>

<!-- ---------------------------------------filter----------------------------------------------- -->
<div class="konten">
<div class="filter-box">
        <!-- Sort Section -->
        <h1>Sort</h1>
        <div class="radio-group">
            <label>
                <input type="radio" name="sort" value="option1"> Popular
            </label>
            <label>
                <input type="radio" name="sort" value="option2"> Harga Tertinggi
            </label>
            <label>
                <input type="radio" name="sort" value="option3"> Rating Tertinggi
            </label>
        </div>

        <!-- Harga Section -->
        <h1>Harga</h1>
        <div class="price-box">
            <div class="price-input">Rp. 0</div>
            <div class="price-input">Rp. 500.000</div>
        </div>
        <input type="range" class="price-slider" min="0" max="100" step="1">

        <!-- Rating Section -->
        <h1>Rating</h1>
        <div class="rating-group">
            <button class="rating-button">
                <div class="star-icon">★★★★★</div>
            </button>
            <button class="rating-button">
                <div class="star-icon">★★★★</div>
            </button>
            <button class="rating-button">
                <div class="star-icon">★★★</div>
            </button>
            <button class="rating-button">
                <div class="star-icon">★★</div>
            </button>
            <button class="rating-button">
                <div class="star-icon">★</div>
            </button>
            <button class="rating-button">
                <div class="star-text">No Rating</div>
            </button>
        </div>
    </div>

<!-- -------------------------------------KONTENT---------------------------------------- -->
<div class="box">
    <div class="bg-white">
            <div class="mx-auto max-w-5xl px-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <a href="#" class="group">
                <img src="img/saloka.jpg" alt="saloka" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h2 class="mt-1 text-lg font-bold text-gray-900"> Saloka Theme Park </h2>
                <p class="mt-4 text-sm text-gray-700">Tuntang, Semarang</p>
                <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
            </a>
                </div>
             </div>
        </div>
    </div>
</div>

</div>

</body>
</html>