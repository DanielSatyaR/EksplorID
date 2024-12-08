<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Keranjang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/keranjang.css">
</head>
<body>

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
            <a href="/keranjang">
                <img src="img/cart.png" alt="cart" width="40px">
            </a>
        </div>
    </div>
</div>

<!--------------------------------------------KONTEN----------------------------------------------  -->
    
<body class="bg-gray-100 font-sans">
<div class="bg-white shadow p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">EksplorID</h1>
        <div class="flex items-center gap-4">
            <a href="#" class="text-sm">Sign in</a>
            <a href="#" class="border border-gray-500 px-4 py-1 rounded-full text-sm hover:bg-gray-100">Create Account</a>
            <a href="#" class="text-gray-700">
                <i class="fas fa-shopping-cart text-xl"></i>
            </a>
        </div>
    </div>
</div>

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
            <a href="link-anda.html" class="w-full bg-blue-500 text-white mt-4 py-2 rounded-lg hover:bg-blue-700 text-center block">
                Lanjut Pembayaran
            </a>
        </div>
    </div>
</div>

</body>
</html>