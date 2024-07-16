<aside
    class="w-52 sm:w-64 bg-slate-800 text-white min-h-screen z-50 -translate-x-full transition duration-500 fixed sm:translate-x-0 sm:fixed"
    id="admin-sidebar">
    <div class="p-4 flex sm:block">
        <a href="#">
            <h1 class="text-xl sm:text-2xl font-bold tracking-wide" style="font-family: Boogaloo">AIo Tech Industries
            </h1>
        </a>
        <button class=" border-slate-600 border-2 rounded-sm sm:hidden" id="close-admin-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(255,255,255,1)" width="32">
                <path
                    d="M21 17.9996V19.9996H3V17.9996H21ZM7 3.5V13.5L2 8.49955L7 3.5ZM21 10.9996V12.9996H12V10.9996H21ZM21 3.99955V5.99955H12V3.99955H21Z">
                </path>
            </svg>
        </button>
    </div>

    <nav class="mt-10 p-3">
        <span class="px-2 text-gray-400">Menu</span>
        <div class="w-full h-[1px] bg-gray-400 my-2 rounded-lg"></div>
        <ul>
            <li class="mb-2">
                <a href="/admin-dashboard"
                    class="flex items-center {{ Request::is('admin-dashboard') ? 'bg-gray-600/80' : '' }} p-2 text-gray-300 hover:bg-blue-800 hover:text-white rounded-md">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-5 9 5-9 5-9-5z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17l9 5 9-5m-9-5v10">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="/admin-daftar-loker"
                    class="flex items-center {{ Request::is('admin-daftar-loker') ? 'bg-gray-600/80' : '' }}  p-2 text-gray-300 hover:bg-blue-800 hover:text-white rounded-md">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    Daftar Loker
                </a>
            </li>
            <li class="mb-2">
                <a href="/admin-daftar-peminjaman"
                    class="flex items-center {{ Request::is('admin-daftar-peminjaman') ? 'bg-gray-600/80' : '' }} p-2 text-gray-300 hover:bg-blue-800 hover:text-white rounded-md">
                    <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="rgba(255,255,255,.7)">
                        <path
                            d="M20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM19 20V4H5V20H19ZM8 7H16V9H8V7ZM8 11H16V13H8V11ZM8 15H13V17H8V15Z">
                        </path>
                    </svg>
                    Daftar Peminjaman
                </a>
            </li>
            <li class="mb-2">
                <a href="/admin-riwayat-peminjaman"
                    class="flex items-center {{ Request::is('admin-riwayat-peminjaman') ? 'bg-gray-600/80' : '' }} p-2 text-gray-300 hover:bg-blue-800 hover:text-white rounded-md">
                    <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="rgba(255,255,255,.7)">
                        <path
                            d="M4 8H20V5H4V8ZM14 19V10H10V19H14ZM16 19H20V10H16V19ZM8 19V10H4V19H8ZM3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3Z">
                        </path>
                    </svg>
                    Riwayat Peminjaman
                </a>
            </li>
            <li class="mb-2">
                <a href="/admin-daftar-ulasan"
                    class="flex items-center {{ Request::is('admin-daftar-ulasan') ? 'bg-gray-600/80' : '' }} p-2 text-gray-300 hover:bg-blue-800 hover:text-white rounded-md">
                    <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="rgba(255,255,255,.7)">
                        <path
                            d="M21 3C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.455L2 22.5V4C2 3.44772 2.44772 3 3 3H21ZM20 5H4V18.385L5.76333 17H20V5ZM13 7V15H11V7H13ZM17 9V15H15V9H17ZM9 11V15H7V11H9Z">
                        </path>
                    </svg>
                    Daftar Ulasan
                </a>
            </li>
        </ul>
    </nav>
</aside>
