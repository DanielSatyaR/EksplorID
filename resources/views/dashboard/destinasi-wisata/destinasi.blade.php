<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4">
        <x-header></x-header>

        <div class="flex justify-start mb-4 my-3">
            <a href="/dashboard/destinasi-wisata/create"
                class="bg-blue-100 text-blue-600 hover:bg-blue-200 hover:text-blue-800 font-semibold px-3 py-1 rounded flex items-center space-x-2 transition-colors duration-200">
                <span>Buat Destinasi Baru</span>
            </a>
        </div>

        <div class="flex justify-center">
            @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded flex items-center mb-4" role="alert">
                <strong class="font-bold">Success! </strong>
                <span>{{ session('success') }}</span>
                <button type="button" class="text-green-700 font-bold ml-2" onclick="this.parentElement.style.display='none';">&times;</button>
            </div>
            @endif
        </div>

        {{-- Tabel --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Gambar</th>
                        <th scope="col" class="px-6 py-3">Kota</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Tiket</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($destinasiWisata as $destinasi)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-2">
                            <img class="w-auto h-[150px] rounded-md" src="{{ asset('storage/' . $destinasi->image) }}" alt="{{ $destinasi->title }}">
                        </td>
                        <td class="px-6 py-4">
                            {{ $destinasi->category->name ?? 'Uncategorized' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $destinasi->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $destinasi->description }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('destinasi-wisata.edit', $destinasi->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                Edit
                            </a>
                            <form action="/dashboard/destinasi-wisata" method="post">
                                @method('delete')
                                @csrf
                                <button class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirm('Are You Sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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