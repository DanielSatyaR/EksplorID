<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4">
        <x-header></x-header>

        <h3 class="text-xl font-semibold mb-4">Create Destinasi Wisata</h3>
        <form action="/dashboard/destinasi-wisata" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-2">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" required autofocus value="{{ old('title') }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500
                    @error('title') border-red-500 @enderror">
                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-2">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" autocomplete="off" value="{{ old('slug') }}"
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
                    <option value="{{ $category->id }}" @selected(old('category_id')==$category->id)>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <!-- Image -->
            <div class="mb-2">
                <label for="images" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="images[]" id="images" multiple
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Description -->
            <div class="mb-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="4"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
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

    <script>
        // Mengambil Input Judul dan Slug
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        // Event Handler
        title.addEventListener('change', function() {
            fetch('/dashboard/destinasi-wisata/create/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        // Mematikan fitur file upload
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
</div>