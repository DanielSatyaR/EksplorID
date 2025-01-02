<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <x-sidebar></x-sidebar>
    </div>
    
    <!-- Main Content -->
    <div class="flex-1 p-4">
        <x-header></x-header>
        <div class="flex justify-start mb-4 my-3">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tiket
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rudi
                            </th>
                            <td class="px-6 py-4">
                                Pengunjung
                            </td>
                            <td class="px-6 py-4">
                                rudi@gmail.com
                            </td>
                            <td class="px-6 py-4">
                                Dago Dreampark Bandung
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class=" font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama2
                            </th>
                            <td class="px-6 py-4">
                                pengunjung
                            </td>
                            <td class="px-6 py-4">
                                Email2@gmail.com
                            </td>
                            <td class="px-6 py-4">
                                contoh1
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class=" font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama3
                            </th>
                            <td class="px-6 py-4">
                                Pengunjung
                            </td>
                            <td class="px-6 py-4">
                                Email3@gmail.com
                            </td>
                            <td class="px-6 py-4">
                                contoh2
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class=" font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama4
                            </th>
                            <td class="px-6 py-4">
                                Pengunjung
                            </td>
                            <td class="px-6 py-4">
                                Email3@gmail.com
                            </td>
                            <td class="px-6 py-4">
                                contoh3
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class=" font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>