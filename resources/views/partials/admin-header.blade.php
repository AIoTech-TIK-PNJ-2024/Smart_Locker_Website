<header class="bg-white shadow-md flex items-center justify-between p-4">
    <div class="flex items-center">
        {{-- Humberger Button --}}
        <button class=" sm:hidden border-gray-100 border-2 rounded-sm" id="hamburger-menu-admin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(23,15,15,1)" width="32">
                <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
            </svg>
        </button>
        <!-- Logo -->
        <div class="text-2xl font-bold text-slate-800 ml-4 tracking-wide " style="font-family: Boogaloo">
            AIo Tech Industries</div>
    </div>
    <div class="flex items-center">
        <!-- User Profile -->
        <div class="ml-4 relative">
            <button class="flex gap-2 items-center" id="profile-dropdown">
                <div class="text-right hidden sm:block">
                    <p class="text-sm text-gray-500 -mb-1">Mas Admin</p>
                    <p class="text-sm text-gray-500 italic ">Admin perpustakaan</p>
                </div>
                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img class="w-full h-full object-cover" src="./img/user.jpg" alt="User Profile">
                </div>
                <svg id="dropdown-icon" class="fill-current" width="12" height="8" viewBox="0 0 12 8"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                        fill="" />
                </svg>
            </button>
            <div id="profile-dropdown-menu"
                class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-20">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                    <div class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(0,0,0,1)" width="18">
                            <path
                                d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z">
                            </path>
                        </svg>
                        <p>Profile</p>
                    </div>
                </a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                    <div class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(0,0,0,1)" width="18">
                            <path
                                d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z">
                            </path>
                        </svg>
                        <p>Logout</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>
