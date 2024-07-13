@extends('layout.head')
@section('body')

    <body class="relative" style="font-family: poppins">
        <header>
            {{-- desktop --}}
            <nav
                class="bg-green-head py-2 px-3 mx-3 my-2 xs:py-3 xs:px-5 rounded-xl lg:rounded-2xl flex right-0 left-0 top-0 fixed items-center justify-between z-50">
                <div class="flex items-center gap-2">
                    <img src="/img/icon.png" alt="app icon" class="hidden xs:block">
                    <button class=" xs:hidden transition" id="hamburger-menu">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(255,255,255,1)"
                            width="32">
                            <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                        </svg>
                    </button>
                    <button id="close-menu" class="xs:hidden hidden transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" viewBox="0 0 24 24"
                            fill="rgba(255,255,255,1)">
                            <path
                                d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z">
                            </path>
                        </svg>
                    </button>
                    <h3 class="tracking-wide text-white text-xl xs:text-2xl md:text-3xl" style="font-family: Boogaloo">AIo
                        Tech</h3>
                </div>
                <div class="xs:flex gap-3 min-[805px]:gap-8 lg:gap-20 hidden">
                    <a href="#" class="">
                        <div
                            class="text-white font-bold text-sm min-[805px]:text-base lg:text-lg p-1 border-white border-b-2">
                            <p>Dashboard</p>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="text-white tracking-wide text-sm min-[805px]:text-base lg:text-lg p-1 border-white">
                            <p>Deskripsi</p>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="text-white tracking-wide text-sm min-[805px]:text-base lg:text-lg p-1 border-white">
                            <p>Ulasan</p>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="text-white tracking-wide text-sm min-[805px]:text-base lg:text-lg p-1 border-white">
                            <p>Tim Kami</p>
                        </div>
                    </a>
                </div>
                <div class="">
                    <a href="/admin-sign-in"
                        class="px-2 py-1 md:px-4 md:py-2 text-white rounded-full border-2 border-white hover:bg-white hover:text-green-head transition text-sm md:text-base">Sign
                        In</a>
                </div>
            </nav>

            {{-- mobile --}}
            <nav class="bg-green-head fixed top-0 right-0 left-0 bottom-0 p-3 -translate-y-full transition duration-1000 xs:-translate-y-full"
                id="nav-menu">
                <div class="w-full h-[1px] bg-white mt-14 mb-3 rounded-full"></div>
                <div class="flex flex-col gap-3">
                    <a href="#"
                        class="text-white text-lg inline-block w-full text-center p-1 hover:bg-green-circle rounded-xl transition">Dashboard
                        > </a>
                    <a href="#"
                        class="text-white text-lg inline-block w-full text-center p-1 hover:bg-green-circle rounded-xl transition">Deskripsi
                        Proyek >
                    </a>
                    <a href="#"
                        class="text-white text-lg inline-block w-full text-center p-1 hover:bg-green-circle rounded-xl transition">Ulasan
                        >
                    </a>
                    <a href="#"
                        class="text-white text-lg inline-block w-full text-center p-1 hover:bg-green-circle rounded-xl transition">Tim
                        Kami >
                    </a>
                </div>
            </nav>

        </header>

        <main>
            {{-- bagian 1 --}}

            {{-- bagian 2 --}}
            {{-- bagian 3 --}}
            {{-- bagian 4 --}}
            {{-- bagian 5 --}}
        </main>
    </body>
@endsection
