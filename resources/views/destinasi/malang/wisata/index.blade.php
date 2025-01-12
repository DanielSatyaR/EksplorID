<!DOCTYPE html>
<html lang="en">

<x-header></x-header>

<body>

  <!--------------------------------------NAVBAR--------------------------------------------- -->

  <x-Navbar></x-Navbar>


  <!-------------------------------------------KONTEN-------------------------------------------- -->

  <div class="bg-white">
    <div class="">
      <nav aria-label="Breadcrumb">
        <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8 mt-5 mb-10 ml-8">
          <li>
            <div class="flex items-center">
              <a href="/homepage" class="mr-2 text-sm font-medium text-gray-500">Home</a>
              <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
              </svg>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <a href="/destinasi" class="mr-2 text-sm font-medium text-gray-500">Destinasi</a>
              <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
              </svg>
            </div>
          </li>

          <div class="flex items-center">
            <a href="/malang" class="mr-2 text-sm font-medium text-gray-500">Malang</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>

          </li>
          <li class="text-sm">
            <a href="{{ route('malang.show', $destinasi->slug) }}" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{ $destinasi->title }}</a>
          </li>
        </ol>
      </nav>

      <!------------------------------------------------ TITLE ----------------------------------------->
      <div class="mx-auto max-w-2xl px-4 pb-16 sm:px-6 lg:max-w-7xl lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-3">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8 mb-10 ml-7">
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Tiket {{ $destinasi->title }}</h1>
        </div>

        <!------------------------------------------------ GALERI ----------------------------------------->

        <!-- Image gallery -->
        <div class="grid grid-cols-4 gap-4 mt-15 lg:px-8">

          <!-- Gambar besar -->
          @if ($destinasi->images->count() > 0)
          <div class="col-span-2 row-span-2">
            <img src="{{ asset('storage/' . $destinasi->images->first()->image) }}"
              alt="Gambar utama"
              class="w-full h-full object-cover rounded-lg shadow-md">
          </div>
          @endif

          <!-- Gambar kecil -->
          @foreach ($destinasi->images->skip(1) as $image)
          <div>
            <img src="{{ asset('storage/' . $image->image) }}"
              alt="Gambar kecil"
              class="w-full h-full object-cover rounded-lg shadow-md">
          </div>
          @endforeach
        </div>


        <!-- ---------------------------------------RINGKASAN-------------------------------------------------- -->

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
          <div class="border-b">
            <nav class="flex space-x-6 text-sm font-medium">
              <a href="#deskripsi" class="py-4 font-semibold border-b-2 border-blue-500 text-blue-500">Deskripsi</a>
              <a href="#tiket" class="py-4 font-semibold text-gray-600 hover:text-blue-500">Tiket</a>
              <a href="#lokasi" class="py-4 font-semibold text-gray-600 hover:text-blue-500">Lokasi</a>
              <a href="#review" class="py-4 font-semibold text-gray-600 hover:text-blue-500">Review</a>
            </nav>
          </div>
        </div>


        <!-- ---------------------------------------Kontent-------------------------------------------------- -->
        <section id="deskripsi"></section>
        <!-- KOLOM DESKRIPSI -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 flex flex-col lg:flex-row justify-between">

          <!-- KOLOM KIRI -->
          <div class="lg:w-3/4 bg-white rounded-lg shadow p-6">
            <div class="mb-4">
              <i class="fa-solid fa-location-dot mr-3 p-2"></i>Jl. Kartika No.2, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65315.
              <p class="text-sm text-gray-500 flex items-center ml-10">Indonesia</p>
            </div>
            <div class="flex items-center text-sm mb-4">
              <i class="fa-solid fa-clock mr-3 p-2"></i>Buka • Jumat • 09:00 - 17.00
            </div>
            <h3 class="text-md font-bold mb-2">Deskripsi</h3>
            <p class="text-gray-700 text-sm">
              {{ $destinasi->description }}
            </p>
          </div>

          <!-- KOLOM KANAN -->
          <div class="lg:w-1/4 w-full mt-6 lg:mt-0 lg:ml-6 bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500">Mulai Dari</p>
            <p class="text-lg font-bold text-red-500">Rp. {{ $destinasi->price }}</p>
            <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-700">
              Cari tiket
            </button>
          </div>
        </div>

        <hr class="my-4">


        <!-- TIKET TERSEDIA -->

        <section id="tiket"></section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
          <h2 class="text-lg font-bold mb-4">Tiket yang Tersedia</h2>
          <div class="flex space-x-4 overflow-auto">
            <button class="px-4 py-2 bg-gray-200 rounded-lg"><i class="fa-solid fa-calendar mr-3 p-2"></i> Lainnya </button>
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg">Nov 30</button>
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg">Des 01</button>
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg">Des 02</button>
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg">Des 03</button>
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg">Des 04</button>
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg">Des 05</button>
          </div>

          <!-- TIKET -->

          <div class="max-w-3xl mt-6 bg-white rounded-lg p-6 border shadow-xl md:flex-row">
            <div class="flex justify-between items-center">
              <div>
                <h3 class="text-md font-bold">Tiket Masuk Weekend</h3>
                <p class="text-sm text-gray-500">Tiket masuk ke Jatim Park 1 untuk 1 orang pengunjung</p>
              </div>
              <div class="text-right">
                <p class="text-lg font-bold text-red-500">Rp. {{ $destinasi->price }}</p>
                <form method="POST" action="{{ route('cart.add') }}">
                  @csrf
                  <input type="hidden" name="destinasi_id" value="{{ $destinasi->id }}">
                  <button type="submit" class="bg-blue-700 text-white py-2 px-4 rounded-lg hover:bg-blue-900 text-center inline-flex items-center">
                    <i class="fa-solid fa-cart-shopping mr-2"></i> Pilih Tiket
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <hr class="my-4">

        <!-- LOKASI -->
        <section id="lokasi"></section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
          <h2 class="text-lg font-bold mb-4">Detail Lokasi</h2>
          <div class="max-w-3xl mt-6 bg-white rounded-lg p-6 border shadow-xl md:flex-row">
            <div class="flex justify-between items-center">
              <img src="../img/dago/loc.png" alt="maps">
            </div>
          </div>
        </div>

        <hr class="my-4">

        <!-- HIGHLIGHT -->

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
          <h2 class="text-lg font-bold mb-4">Jelajahi Wisata Lainnya yang ada di Malang</h2>

          <div class="mx-xl max-w-2xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="/malang/jatim2" class="group border-2 rounded-md">
              <img src="../img/jatimpark2.jpg" alt="dranch" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[6/6] rounded-b-none">
              <h2 class="mt-1 text-lg font-bold text-gray-900">Jatim Park 2</h2>
              <p class="mt-4 text-sm text-gray-700"> Kec. Batu, Kota Batu, Jawa Timur</p>
              <h3 class="mt-1 text-lg font-bold text-red-500">Rp.27.000</h3>
            </a>
          </div>
        </div>

        <hr class="my-4">

        <!-- RATING -->
        <section id="review"></section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
          <h2 class="text-lg font-bold mb-4">Rating & Review</h2>

          <div class="max-w-3xl mt-6 bg-white rounded-lg p-6 border shadow-xl md:flex-row">
            <div class="flex justify-between items-center">
              <div>
                <div class="flex -space-x-1 overflow-hidden">
                  <img class="inline-block size-10 rounded-full ring-2 ring-white" src="../img/dago/rusdi.jpg" alt="rusdi">
                  <div class="px-5 p-2">
                    <h3 class="text-md font-bold">Mas Rusdi </h3>
                  </div>
                </div>
                <button class="rating-button pt-2">
                  <div class="star-icon">★★★★★</div>
                </button>
                <div class="pt-3">
                  <p class="text-md">Wahananya Asik rek, indah banget pemandangannya, keren bisa melayang gitu.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <script>
        document.querySelectorAll('a[href="#deskripsi"],a[href="#tiket"], a[href="#lokasi"], a[href="#review"]').forEach(function(anchor) {
          anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
              targetElement.scrollIntoView({
                behavior: 'smooth'
              });
            }
          });
        });
      </script>

      <x-footer></x-footer>

</body>

</html>