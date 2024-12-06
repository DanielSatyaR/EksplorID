<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Yogyakarta</title>
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
        <img src="img/yogyakarta1.jpg" alt="Kota Bandung">
        <div class="banner-konten">
            <h1> Yogyakarta </h1>
            <p> Kota Yogyakarta adalah ibu kota sekaligus pusat pemerintahan dan perekonomian dari provinsi Daerah Istimewa Yogyakarta, Indonesia.  </p>
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
                <img src="img/candiB.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h2 class="mt-1 text-lg font-bold text-gray-900"> Candi Borobudur </h2>
                <p class="mt-4 text-sm text-gray-700">Borobudur, Magelang</p>
                <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
            </a>
            <a href="#" class="group">
                <img src="img/candiP.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h2 class="mt-1 text-lg font-bold text-gray-900">Candi Prambanan</h2>
                <p class="mt-4 text-sm text-gray-700">Prambanan, Sleman</p>
                <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>

            </a>
            <a href="#" class="group">
                <img src="img/tamansari.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h2 class="mt-1 text-lg font-bold text-gray-900"> Taman sari keraton</h2>
                <p class="mt-4 text-sm text-gray-700">Danurejan, Yogyakarta</p>
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