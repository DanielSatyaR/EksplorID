<div class="min-w-full sticky top-0 z-50 bg-white shadow-md">
  <nav class="bg-white" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <a href="/homepage">
              <img class="w-32 h-20" src="../img/logo.png" alt="EksplorID">
            </a>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/destinasi" class="rounded-md px-3 py-2 text-sm font-semibold text-black hover:text-gray-500" aria-current="page">Destinasi</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-semibold text-black-300 hover:text-gray-500">Tentang Kami</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-semibold text-black-300 hover:text-gray-500">Promo & Kupon</a>
            </div>
          </div>
        </div>

        @auth

        <a href="/keranjang" class="relative ml-auto">
          <img src="../img/cart.png" alt="Cart Icon" class="w-8 h-8">
          <!-- <span class="absolute top-0 right-0 bg-red-600 text-white text-xs rounded-full w-4 h-3 flex items-center justify-center"></span> -->
        </a>

        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" @click="isOpen = !isOpen"
                  class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-8 rounded-full" src="img/profil.jpg" alt="">
                </button>
              </div>

              <div x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
                <a href="/dashboard/index" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</button>
                </form>
              </div>
            </div>

            @else
            <div class="auth-buttons space-x-4">
              <a href="/login" class="sign-in">Sign in</a>
              <a href="/createacc" class="create-account">Create Account</a>
            </div>
            @endauth

          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="isOpen = !isOpen"
            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{'hidden': isOpen, 'block': !isOpen }"
              class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{'block': isOpen, 'hidden': !isOpen }"
              class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:text-gray-500" aria-current="page">Destinasi</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black-300 hover:text-gray-500">Tentang Kami</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black-300 hover:text-gray-500">Promo & Kupon</a>

        @auth
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black-300 hover:text-gray-500">Logout</a>
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="img/profil.jpg" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-black">Guest</div>
            <div class="text-sm font-medium text-gray-500">Guest@gmail.com</div>
          </div>
        </div>
        @else
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black-300 hover:text-gray-500">Login</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black-300 hover:text-gray-500">Daftar Akun</a>
        @endauth

      </div>
    </div>
  </nav>
</div>