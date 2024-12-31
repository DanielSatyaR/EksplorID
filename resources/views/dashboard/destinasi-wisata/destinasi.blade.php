<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4">
        <x-header></x-header>

        <div class="flex justify-start mb-4 my-3">
            <a href="/destinasi-wisata/create"
                class="bg-blue-100 text-blue-600 hover:bg-blue-200 hover:text-blue-800 font-semibold px-3 py-1 rounded flex items-center space-x-2 transition-colors duration-200">
                <span>Create new post</span>
            </a>
        </div>
        {{-- Tabel --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tiket
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-2">
                            <img class="w-auto  h-[150px] rounded-md" src="https://thumb.spotlight.id/image/2022/10/16/415783639c403079e6afb7c8976ba0a3-Danau-beratan-bedugul.png" alt="Jese image">
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            25
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" id="openModalBtn" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-4">
                            White
                        </td>
                        <td class="px-6 py-4">
                            Laptop PC
                        </td>
                        <td class="px-6 py-4">
                            Habis
                        </td>
                        <td class="px-6 py-4">
                            $1999
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" id="openModalBtn" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" id="openModalBtn" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- Tabel --}}

        <!-- Modal -->
        <div id="editModal" 
        class="fixed inset-0 flex items-center justify-center z-50 hidden bg-gray-900 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-xl font-semibold mb-4">Edit Destinasi Wisata</h3>
        <form action="#" method="POST">

            <div class="mb-2">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-2">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-2">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category" id="category" 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Category</option>
                    <option value="nature">Nature</option>
                    <option value="historical">Historical</option>
                    <option value="cultural">Cultural</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image" 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-2">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="content" id="content" rows="4" 
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="mb-2">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <textarea name="location" id="location" rows="2" 
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="mb-2">
                <input type="text" name="extra" id="extra" placeholder="Masukan Lokasi"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-end">
                <button type="button" id="closeModalBtn" 
                        class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">Close</button>
                <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded-md">Submit</button>
            </div>
        </form>
        </div>
        </div>
    </div>
</div>

<script>
    // Mendapatkan elemen modal dan tombol
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const editModal = document.getElementById('editModal');

    // Fungsi untuk membuka modal
    openModalBtn.addEventListener('click', function(event) {
        event.preventDefault();
        editModal.classList.remove('hidden');
    });

    // Fungsi untuk menutup modal
    closeModalBtn.addEventListener('click', function() {
        editModal.classList.add('hidden');
    });

    // Menutup modal saat klik di luar modal
    window.addEventListener('click', function(event) {
        if (event.target === editModal) {
            editModal.classList.add('hidden');
        }
    });
</script>