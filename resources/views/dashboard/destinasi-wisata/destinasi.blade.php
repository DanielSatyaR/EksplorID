<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4">
        <x-header></x-header>

        <div class="flex justify-start mb-4 my-3">
            <a href="/destinasi-wisata/destinasi/create"
                class="bg-blue-100 text-blue-600 hover:bg-blue-200 hover:text-blue-800 font-semibold px-3 py-1 rounded flex items-center space-x-2 transition-colors duration-200">
                <span>Create new post</span>
            </a>
        </div>
    </div>
</div>