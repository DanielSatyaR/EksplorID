<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4">
        <x-header></x-header>

        <h3 class="text-xl font-semibold mb-4">Buat Kategori Baru</h3>
        <form action="/dashboard/kategori" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Nama Kota -->
            <div class="mb-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Kota</label>
                <input type="text" name="name" id="name" required autofocus value="{{ old('name') }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-2">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" autocomplete="off" value="{{ old('slug') }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Buttons -->
            <div class="flex justify-end">
                <a href="/dashboard/kategori" class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">
                    Back
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Mengambil Input Judul dan Slug
    const title = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    // Event Handler
    title.addEventListener('change', function() {
        fetch('/dashboard/kategori/create/checkSlug?name=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>