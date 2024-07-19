<div class="grid min-[470px]:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mb-6 mt-2">
    {{-- card 1 --}}
    <div class="bg-white shadow-md rounded-sm px-2 py-5 overflow-hidden">
        <div class="flex items-center mb-2">
            <div class="bg-cyan-400/20 w-12 h-12 rounded-full flex p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(50,66,165,.9)">
                    <path
                        d="M17 14H12.6586C11.8349 16.3304 9.61244 18 7 18C3.68629 18 1 15.3137 1 12C1 8.68629 3.68629 6 7 6C9.61244 6 11.8349 7.66962 12.6586 10H23V14H21V18H17V14ZM7 14C8.10457 14 9 13.1046 9 12C9 10.8954 8.10457 10 7 10C5.89543 10 5 10.8954 5 12C5 13.1046 5.89543 14 7 14Z">
                    </path>
                </svg>
            </div>
            <h3 class="font-bold text-lg text-slate-600 mx-3 xl:text-xl">Jumlah Loker</h3>
        </div>
        <div class="ml-24 flex items-end">
            <span class="text-5xl text-slate-600 mx-1 xl:text-6xl">{{ $locker }}</span>
            <p class="mb-1 text-slate-600 xl:text-lg">Loker</p>
        </div>
    </div>
    {{-- card 2 --}}
    <div class="bg-white shadow-md rounded-sm px-2 py-5 overflow-hidden">
        <div class="flex items-center mb-2">
            <div class="bg-cyan-400/20 w-12 h-12 rounded-full flex p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(50,66,165,.9)">
                    <path
                        d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM21 17H22V22H14V17H15V16C15 14.3431 16.3431 13 18 13C19.6569 13 21 14.3431 21 16V17ZM19 17V16C19 15.4477 18.5523 15 18 15C17.4477 15 17 15.4477 17 16V17H19Z">
                    </path>
                </svg>
            </div>
            <h3 class="font-bold text-lg text-slate-600 mx-3 xl:text-xl">Jumlah Peminjam</h3>
        </div>
        <div class="ml-24 flex items-end">
            <span class="text-5xl text-slate-600 mx-1 xl:text-6xl">{{ $pengguna }}</span>
            <p class="mb-1 text-slate-600 xl:text-lg">Peminjam</p>
        </div>
    </div>
    {{-- card 3 --}}
    <div class="bg-white shadow-md rounded-sm px-2 py-5 overflow-hidden">
        <div class="flex items-center mb-2">
            <div class="bg-cyan-400/20 w-12 h-12 rounded-full flex p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(50,66,165,.9)">
                    <path
                        d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM11 13V15H13V13H11ZM11 7V12H13V7H11Z">
                    </path>
                </svg>
            </div>
            <h3 class="font-bold text-lg text-slate-600 mx-3 xl:text-xl">Jumlah Ulasan</h3>
        </div>
        <div class="ml-24 flex items-end">
            <span class="text-5xl text-slate-600 mx-1 xl:text-6xl">{{ $ulasan }}</span>
            <p class="mb-1 text-slate-600 xl:text-lg">Ulasan</p>
        </div>
    </div>
</div>
