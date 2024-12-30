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
                <a href="/destinasi-wisata/destinasi"
                    class="bg-blue-100 text-blue-600 hover:bg-blue-200 hover:text-blue-800 font-semibold px-3 py-1 rounded flex items-center space-x-2 transition-colors duration-200">
                    <span class="text-sm">&laquo;</span>
                    <span>Back</span>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg w-full max-w-4xl mx-auto md:ml-1">
                <form class="space-y-4">
                    <!-- Title Field -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                    </div>

                    <!-- Slug Field -->
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input type="text" id="slug" name="slug" autocomplete="off" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <!-- Category Field -->
                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category_id" name="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            <option value="">Select Category</option>
                        </select>
                    </div>

                    <!-- Image Upload Field -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        <img class="img-preview w-40 h-40 object-contain mb-3 rounded-lg col-sm-5" style="display: none;">
                    </div>

                    <!-- Body Field -->
                    <div>
                        <label for="body" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea id="body" name="body" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm resize-none"></textarea>
                    </div>

                    <!-- Location Field -->
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <div id="map" class="w-full h-64 bg-gray-200 rounded-md mb-4"></div>
                        <input type="text" id="location" name="location" placeholder="Enter location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end space-x-2">
                        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>