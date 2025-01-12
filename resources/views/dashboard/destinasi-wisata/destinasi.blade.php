<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white fixed h-screen">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 ml-64 overflow-auto h-screen">
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
                        <th scope="col" class="px-6 py-3">Judul</th>
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
                            @if($destinasi->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $destinasi->images->first()->image) }}" alt="Destinasi Image" class="max-w-xs h-auto mb-4">
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $destinasi->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $destinasi->category->name ?? 'Uncategorized' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $destinasi->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $destinasi->price }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('destinasi-wisata.edit', $destinasi->slug) }}" class="text-yellow-500 hover:text-yellow-700 mr-1">
                                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs font-semibold">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </span>
                            </a>
                            <form action="{{ route('destinasi-wisata.destroy', $destinasi->slug) }}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-500 hover:text-red-700">
                                    <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs font-semibold">
                                        <i class="fa-regular fa-circle-xmark"></i>
                                    </span>
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