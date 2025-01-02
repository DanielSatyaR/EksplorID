<!DOCTYPE html>
<html lang="en">

<x-header> </x-header>

<body>

  <x-Navbar></x-Navbar>

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
      <div class="text-center" id="confirmation-step">
        <div class="w-8 h-8 rounded-full bg-gray-300 text-gray-700 flex items-center justify-center">3</div>
        <p class="mt-2 text-sm text-gray-500">Booking is confirmed!</p>
      </div>
    </div>
  </div>

  <div class="container mx-auto p-6">
    <div class="flex flex-col md:flex-row gap-6">
      <div class="bg-white p-6 rounded-lg shadow-md flex-1">
        <div class="mb-4">
          <p class="text-gray-700 font-semibold">Berakhir Dalam</p>
          <div class="text-red-500 text-2xl font-bold">00:10:00</div>
        </div>
        <hr class="my-4">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1">
          <!-- BCA -->
          <label for="bca" class="flex items-center space-x-4">
            <input type="radio" id="bca" name="payment" value="bca" class="form-radio text-blue-600" />
            <img src="img/bca.jpg" alt="BCA" class="h-6">
            <span>BCA Virtual Account</span>
          </label>

          <!-- Mandiri -->
          <label for="mandiri" class="flex items-center space-x-4">
            <input type="radio" id="mandiri" name="payment" value="mandiri" class="form-radio text-blue-600" />
            <img src="img/mandiri.jpg" alt="Mandiri" class="h-6">
            <span>Mandiri Virtual Account</span>
          </label>

          <!-- BNI -->
          <label for="bni" class="flex items-center space-x-4">
            <input type="radio" id="bni" name="payment" value="bni" class="form-radio text-blue-600" />
            <img src="img/bni.png" alt="BNI" class="h-6">
            <span>BNI Virtual Account</span>
          </label>
        </div>

        <div class="w-full md:w-1/1 bg-white p-6 rounded-lg shadow">
          <h2 class="text- font-bold mb-4">Total Pembayaran</h2>
          <p class="flex justify-between">
            <span>1 item</span>
            <span class="font-bold text-red-500">Rp.27.000</span>
          </p>
          <button id="pay-button" class="w-full bg-blue-500 text-white mt-4 py-2 rounded-lg hover:bg-blue-700">
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
    </div>
  </div>

  <script>
    document.getElementById('pay-button').addEventListener('click', function () {
      const selectedPayment = document.querySelector('input[name="payment"]:checked');
      if (selectedPayment) {
        alert('Pembayaran berhasil dengan ' + selectedPayment.nextElementSibling.alt);
        document.getElementById('confirmation-step').querySelector('div').classList.remove('bg-gray-300', 'text-gray-700');
        document.getElementById('confirmation-step').querySelector('div').classList.add('bg-green-600', 'text-white');
        document.getElementById('confirmation-step').querySelector('p').classList.remove('text-gray-500');
        document.getElementById('confirmation-step').querySelector('p').classList.add('text-green-600');
      } else {
        alert('Silakan pilih metode pembayaran.');
      }
    });
  </script>

</body>

</html>
