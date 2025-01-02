<x-header> </x-header>

<body>

  <x-Navbar></x-Navbar>
  <!--------------------------------------------KONTEN----------------------------------------------  -->

  <!-- checkout number -->

  <div class="container mx-auto pt-5 mt-5">
    <div class="flex justify-center space-x-8 mb-8 mt-15">
      <div class="text-center">
        <div class="w-8 h-8 rounded-full bg-gray-300 text-gray flex items-center justify-center">1</div>
        <p class="mt-2 text-sm text-gray-500">Customer information</p>
      </div>
      <div class="text-center">
        <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center">2</div>
        <p class="mt-2 text-sm text-blue-600">Payment information</p>
      </div>
      <div class="text-center">
        <div class="w-8 h-8 rounded-full bg-gray-300 text-gray-700 flex items-center justify-center">3</div>
        <p class="mt-2 text-sm text-gray-500">Booking is confirmed!</p>
      </div>
    </div>
  </div>

  <!-- form -->

  <div class="container mx-auto p-6 ">
    <div class="flex flex-col md:flex-row gap-6">
      <!-- Time -->
      <div class="bg-white p-6 rounded-lg shadow-md flex-1">
        <div class="mb-4">
          <p class="text-gray-700 font-semibold">Berakhir Dalam</p>
          <div id="countdown" class="text-red-500 text-2xl font-bold">00:10:00</div>
        </div>
        <hr class="my-4">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1">
          <!-- BCA -->
          <label class="flex items-center space-x-4">
            <input type="radio" name="payment" class="form-radio text-blue-600" />
            <img src="img/bca.jpg" alt="BCA" class="h-6">
            <span>BCA Virtual Account</span>
          </label>

          <!-- Mandiri -->
          <label class="flex items-center space-x-4">
            <input type="radio" name="payment" class="form-radio text-blue-600" />
            <img src="img/mandiri.jpg" alt="Mandiri" class="h-6">
            <span>Mandiri Virtual Account</span>
          </label>

          <!-- BNI -->
          <label class="flex items-center space-x-4">
            <input type="radio" name="payment" class="form-radio text-blue-600" />
            <img src="img/bni.png" alt="BNI" class="h-6">
            <span>BNI Virtual Account</span>
          </label>
          <div>
            <div class="mt-2.5">
              <div class="flex rounded-md bg-white outline outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
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
            Bayar dengan Virtual Account
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

<script>
  // Set waktu awal dalam detik (10 menit)
  let countdownTime = 600; // 10 menit = 600 detik

  function startCountdown() {
    const countdownElement = document.getElementById('countdown');

    // Fungsi untuk memperbarui waktu
    function updateCountdown() {
      // Hitung jam, menit, dan detik
      const hours = Math.floor(countdownTime / 3600);
      const minutes = Math.floor((countdownTime % 3600) / 60);
      const seconds = countdownTime % 60;

      // Format waktu menjadi HH:MM:SS
      countdownElement.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

      // Kurangi waktu jika masih ada
      if (countdownTime > 0) {
        countdownTime--;
      } else {
        clearInterval(timer); // Hentikan timer jika waktu habis
        countdownElement.textContent = "00:00:00";
      }
    }

    // Panggil fungsi setiap 1 detik
    const timer = setInterval(updateCountdown, 1000);
  }

  // Jalankan hitung mundur saat halaman dimuat
  window.onload = startCountdown;
</script>