<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <x-header></x-header>
        <!-- Scrollable Main Content -->
        <div class="flex-1 overflow-y-auto p-4">
            <div class="flex justify-start mb-4 my-3">
                <a href="/dashboard/destinasi-wisata"
                    class="bg-blue-100 text-blue-600 hover:bg-blue-200 hover:text-blue-800 font-semibold px-3 py-1 rounded flex items-center space-x-2 transition-colors duration-200">
                    <span class="text-sm">&laquo;</span>
                    <span>Back</span>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg w-full max-w-4xl mx-auto md:ml-1">
                <form class="space-y-4" method="post" action="/dashboard/destinasi-wisata" enctype="multipart/form-data">

                    @csrf

                    <!-- Title Field -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('title') border-red-500 @enderror" required autofocus value="{{ old('title') }}">

                        @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Slug Field -->
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input type="text" id="slug" name="slug" autocomplete="off" autofocus value="{{ old('slug') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('slug') border-red-500 @enderror">

                        @error('slug')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category Field -->
                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category_id" name="category_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('category_id') border-red-500 @enderror">
                            <option value="">Select Category</option>

                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach

                        </select>

                        @error('category_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image Upload Field -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="image" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('image') border-red-500 @enderror" onchange="previewImage()"">
                        <img class=" img-preview w-40 h-40 object-contain mb-3 rounded-lg col-sm-5" style="display: none;">
                    </div>

                    <!-- Location Field -->
                    <!-- <div>
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <div id="map" class="w-full h-64 bg-gray-200 rounded-md mb-4"></div>
                        <input type="text" id="location" name="location" placeholder="Enter location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div> -->

                    <!-- Description Field -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm resize-none @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>

                        @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Submit Button -->
                    <div class="flex justify-end space-x-2">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>