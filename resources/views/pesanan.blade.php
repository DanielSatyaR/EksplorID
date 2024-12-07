<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Detail Pesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/pesanan.css">
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
<!-- konten -->
<div class="container mx-auto p-6 mt-16">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Cart Items -->
        <div class="flex-[5] bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-bold mb-4">Detail Pemesanan</h2>
            <h2 class="text-sm  mb-4">Isi formulir ini dengan benar karena e-tiket akan dikirim ke alamat email sesuai data pemesan.
</h2>
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
  <!-- First Name -->
  <div>
    <label for="first-name" class="block text-sm font-semibold text-gray-900">First name</label>
    <div class="mt-2.5">
      <input type="text" name="first-name" id="first-name" autocomplete="given-name" 
             class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" 
             placeholder="Rusdi">
    </div>
  </div>
  
  <!-- Last Name -->
  <div>
    <label for="last-name" class="block text-sm font-semibold text-gray-900">Last name</label>
    <div class="mt-2.5">
      <input type="text" name="last-name" id="last-name" autocomplete="family-name" 
             class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" 
             placeholder="Alex">
    </div>
  </div>
  
  <!-- Email -->
  <div>
    <label for="email" class="block text-sm font-semibold text-gray-900">Email</label>
    <div class="mt-2.5">
      <input type="email" name="email" id="email" autocomplete="email" 
             class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" 
             placeholder="Rusdi@gmail.com">
    </div>
  </div>
  
  <!-- Phone Number -->
  <div>
    <label for="phone-number" class="block text-sm font-semibold text-gray-900">Phone number</label>
    <div class="mt-2.5">
      <div class="flex rounded-md bg-white outline outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
        <div class="grid shrink-0 grid-cols-1 focus-within:relative">
          <select id="country" name="country" autocomplete="country" aria-label="Country" 
                  class="col-start-1 row-start-1 w-full appearance-none rounded-md py-2 pl-3.5 pr-7 text-base text-gray-500 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
            <option>ID</option>
          </select>
        </div>
        <input type="text" name="phone-number" id="phone-number" 
               class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm" 
               placeholder="+62 890 1990 4809">
      </div>
    </div>
  </div>
</div>

      
        <!-- Total Pembayaran -->

        <div class="w-full md:w-1/1 bg-white p-6 rounded-lg shadow">
            <h2 class="text- font-bold mb-4">Total Pembayaran</h2>
            <p class="flex justify-between">
                <span>1 item</span>
                <span class="font-bold text-red-500">Rp.27.000</span>
            </p>
            <button class="w-full bg-blue-500 text-white mt-4 py-2 rounded-lg hover:bg-blue-700">
                Lanjut Pembayaran
            </button>
        </div>
    </div>
    <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow">
            <h2 class="text-center font-bold mb-6">Ringkasan Pesanan</h2>
            <div class="flex flex-row items-center mt-4">
        <img src="img/dagodream.jpg" alt="dago dream" class="w-32 h-15 rounded-lg mr-4">
          <div>
          <h2 class="font-bold">Tiket Dago Dreampark Bandung</h2>
        </div>
    </div>
            <div class="border-t border-gray-300 mt-4"></div>
        <div class="flex flex-col mt-4">
            <p class="text-gray-500">Tanggal dipilih</p>
            <h2 class="font-bold">Rab, 11 Des 2024</h2>
        </div>
          <div class="flex flex-col mt-4">
            <p class="text-gray-500">Jumlah pax</p>
            <h2 class="font-bold">1 tiket • 1 orang</h2>
        </div>
        <div class="border-t border-gray-300 mt-6"></div>
        <div class="flex flex-col mt-4">
        <p class="text-gray-500 flex items-center">
          <i class="fa-solid fa-calendar mr-3 p-2"></i>Berlaku tanggal 11 Desember 2024
        </p>
        <p class="text-gray-500 flex items-center">
          <i class="fas fa-money-bill mr-2 p-2"></i>Tidak bisa refund
        </p>
        <p class="text-gray-500 flex items-center">
          <i class="fas fa-bolt-lightning mr-4 p-2"></i>Konfirmasi Instant
        </p>
        </div>
</div>

</body>
</html>