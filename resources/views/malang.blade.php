<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Malang</title>
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
            @auth
            <form action="/logout" method="post">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @else
            <a href="/login" class="sign-in">Log in</a>
            <a href="/createacc" class="create-account">Create Account</a>
            @endauth
        </div>
        <div class="cart">
            <a href="/keranjang">
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
        <img src="img/malang1.png" alt="Kota Bandung">
        <div class="banner-konten">
            <h1> Malang </h1>
            <p> Kota Malang adalah sebuah kota yang terletak di Provinsi Jawa Timur, Indonesia, Kota ini merupakan kota terbesar kedua di Jawa Timur setelah Surabaya, dan kota terbesar ke-12 di Indonesia. </p>
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
                        <img src="img/jatimpark1.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                        <h2 class="mt-1 text-lg font-bold text-gray-900"> Jatim Park 1 </h2>
                        <p class="mt-4 text-sm text-gray-700">Batu, Malang</p>
                        <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
                    </a>
                    <a href="#" class="group">
                        <img src="img/jatimpark2.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                        <h2 class="mt-1 text-lg font-bold text-gray-900">Jatim Park 2</h2>
                        <p class="mt-4 text-sm text-gray-700">Batu, Malang</p>
                        <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>

                    </a>
                    <a href="#" class="group">
                        <img src="img/jatimpark3.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                        <h2 class="mt-1 text-lg font-bold text-gray-900"> Jatim Park 3</h2>
                        <p class="mt-4 text-sm text-gray-700">Batu, Malang</p>
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