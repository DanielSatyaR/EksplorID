<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white fixed h-screen overflow-y-auto">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Main Content -->
    <div class="ml-64 flex-1 p-4 overflow-y-auto">
        <x-header></x-header>

        <h3 class="text-xl font-semibold mb-4">Edit Destinasi Wisata</h3>
        <form action="{{ route('destinasi-wisata.update', $destinasi->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-2">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" required autofocus value="{{ old('title', $destinasi->title) }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500
                @error('title') border-red-500 @enderror">
                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-2">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" autocomplete="off" value="{{ old('slug', $destinasi->slug) }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500
                @error('slug') border-red-500 @enderror">
                @error('slug')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category -->
            <div class="mb-2">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" required id="category"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $destinasi->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <!-- Image -->
            <div class="mb-2">
                <label for="current-images" class="block text-sm font-medium text-gray-700">Images</label>
                <div class="flex flex-wrap gap-4">
                    @foreach($destinasi->images as $image)
                    <div class="relative w-32 h-32">
                        <img src="{{ asset('storage/' . $image->image) }}" alt="Destinasi Image" class="w-full h-full object-cover rounded shadow-md">
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Upload New Images -->
            <div class="mb-2">
                <label for="images" class="block text-sm font-medium text-gray-700">Tambah Gambar Baru</label>
                <input type="file" name="images[]" id="images" multiple onchange="previewNewImages(event)" class="block mt-1">
                @error('images.*')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Preview New Images -->
            <div id="new-image-preview" class="mb-2 flex flex-wrap gap-2 overflow-x-auto">
                <!-- Selected images will be displayed here -->
            </div>

            <!-- Harga -->
            <div class="mb-2">
                <label for="price" class="block text-sm font-medium text-gray-700">Harga Tiket</label>
                <input type="text" name="price" id="price" required value="{{ old('price', $destinasi->price) }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500
    @error('price') border-red-500 @enderror">
                @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="4"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $destinasi->description) }}</textarea>
                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex justify-end">
                <button type="button" id="closeModalBtn" class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">
                    <a href="/dashboard/destinasi-wisata">Back</a>
                </button>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Mengambil Input Judul dan Slug
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    // Event Handler
    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    });

    // Mematikan fitur file upload
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });

    function previewNewImages(event) {
        const files = event.target.files; // Ambil file yang dipilih
        const previewContainer = document.getElementById('new-image-preview');

        // Loop melalui file yang dipilih
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                // Membuat elemen gambar
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-32', 'h-32', 'm-2', 'object-cover', 'rounded', 'shadow-md');

                // Membuat kontainer untuk gambar dan tombol hapus
                const div = document.createElement('div');
                div.classList.add('relative', 'w-32', 'h-32', 'm-2');
                div.appendChild(img);

                // Membuat tombol hapus
                const btnDelete = document.createElement('button');
                btnDelete.textContent = 'X';
                btnDelete.classList.add('absolute', 'top-0', 'right-0', 'bg-red-600', 'text-white', 'p-1', 'rounded-full');

                // Event untuk menghapus pratinjau gambar
                btnDelete.addEventListener('click', function() {
                    previewContainer.removeChild(div);
                });

                div.appendChild(btnDelete);
                previewContainer.appendChild(div);
            };

            reader.readAsDataURL(file); // Membaca file sebagai URL data
        }
    }
</script>