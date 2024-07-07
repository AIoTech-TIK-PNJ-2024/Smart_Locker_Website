<header class="bg-white dark:bg-gray-800 shadow-md flex items-center justify-between p-4">
    <div class="flex items-center">
        <!-- Logo -->
        <div class="text-xl font-bold text-gray-900 dark:text-gray-100 ml-4">IoTech</div>
    </div>
    <div class="flex items-center">
        <!-- User Profile -->
        <div class="ml-4 relative">
            <button class="flex gap-2 items-center" id="profile-dropdown">
                <div class="text-right">
                    <p class="text-sm text-gray-500 font-italic -mb-1">Mas Admin</p>
                    <p class="text-sm text-gray-500 font-italic ">Admin perpustakaan</p>
                </div>
                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img class="w-full h-full object-cover" src="./img/user.jpg" alt="User Profile">
                </div>
                <svg id="dropdown-icon" class="hidden fill-current sm:block" width="12" height="8"
                    viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                        fill="" />
                </svg>
            </button>
            <div id="profile-dropdown-menu"
                class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-2 z-20">
                <a href="#"
                    class="block px-4 py-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-900">Profile</a>
                <a href="#"
                    class="block px-4 py-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-900">Logout</a>
            </div>
        </div>
    </div>
</header>
