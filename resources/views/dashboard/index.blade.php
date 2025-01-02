<div class="flex h-screen">
  <!-- Sidebar untuk semua pengguna yang login -->
  @if (Auth::check())
  <div class="w-64 bg-gray-800 text-white">
    <x-sidebar></x-sidebar>
  </div>
  @endif

  <!-- Main Content -->
  <div class="flex-1 p-4">
    <x-header></x-header>

    <!-- Konten Dashboard untuk Semua Pengguna -->

  </div>
</div>