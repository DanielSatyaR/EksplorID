<nav class="bg-gray-800 w-64 min-h-full">
    <div class="flex flex-col h-full">
        <div class="flex items-center justify-center h-16 bg-gray-900">
            <a href="/homepage">
                <img class="w-32 h-20" src="{{ asset('img/logo.png') }}" alt="EksplorID">
            </a>
        </div>
        <div class="flex-1 overflow-y-auto">
            <ul class="mt-6 space-y-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <li><a href="/dashboard/index" class="block px-4 py-2 text-sm font-medium {{ Request::is('dashboard/index') ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  rounded-md" aria-current="page">Dashboard</a></li>
                <li><a href="/dashboard/destinasi-wisata" class="block px-4 py-2 text-sm font-medium {{ Request::is('/dashboard/destinasi-wisata') ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  rounded-md">Destinasi Wisata</a></li>
                <li><a href="/dashboard/kategori" class="block px-4 py-2 text-sm font-medium {{ Request::is('dashboard/kategori') ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  rounded-md">Kategori Kota</a></li>
                <li><a href="/dashboard/users" class="block px-4 py-2 text-sm font-medium {{ Request::is('dashboard/user') ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  rounded-md">User</a></li>
            </ul>
        </div>
        <div class="flex items-center justify-between px-4 py-4 bg-gray-900">
            <div class="flex items-center">
                <div class="ml-3">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>