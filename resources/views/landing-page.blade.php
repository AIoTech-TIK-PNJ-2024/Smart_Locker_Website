@extends('layout.head')
@section('body')

    <body style="font-family: poppins" class="relative overflow-x-hidden bg-white">
        <header>
            {{-- desktop --}}
            <nav
                class="bg-green-head/90 py-2 px-3 mx-3 my-2 xs:py-3 xs:px-5 rounded-xl lg:rounded-2xl flex right-0 left-0 top-0 fixed items-center justify-between z-50">
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
                <div class="xs:flex gap-3 min-[805px]:gap-8 lg:gap-20 xl:gap-32 hidden">
                    <a href="#dashboard" id="desktop-dashboard" class="menu-item">
                        <div class=" text-white  text-sm min-[805px]:text-base lg:text-lg p-1 ">
                            <p>Dashboard</p>
                        </div>
                    </a>
                    <a href="#deskripsi" id="desktop-deskripsi" class="menu-item">
                        <div class="text-white tracking-wide text-sm min-[805px]:text-base lg:text-lg p-1 border-white">
                            <p>Deskripsi</p>
                        </div>
                    </a>
                    <a href="#ulasan" id="desktop-ulasan" class="menu-item">
                        <div class="text-white tracking-wide text-sm min-[805px]:text-base lg:text-lg p-1 border-white">
                            <p>Ulasan</p>
                        </div>
                    </a>
                    <a href="#tim" id="desktop-tim" class="menu-item">
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
            <nav class="bg-green-head fixed top-0 right-0 left-0 bottom-0 p-3 -translate-y-full transition duration-1000 xs:-translate-y-full z-40"
                id="nav-menu">
                <div class="w-full h-[1px] bg-white mt-14 mb-3 rounded-full"></div>
                <div class="flex flex-col gap-3">
                    <a href="#dashboard" id="mobile-dashboard"
                        class="menu-item text-white text-lg inline-block w-full text-center p-1 hover:bg-green-circle rounded-xl transition">Dashboard
                        > </a>
                    <a href="#deskripsi" id="mobile-deskripsi"
                        class="menu-item text-white text-lg inline-block w-full text-center p-1 hover:bg-green-circle rounded-xl transition">Deskripsi
                        >
                    </a>
                    <a href="#ulasan" id="mobile-ulasan"
                        class="menu-item text-white text-lg inline-block w-full text-center p-1 hover:bg-green-circle rounded-xl transition">Ulasan
                        >
                    </a>
                    <a href="#tim" id="mobile-tim"
                        class="menu-item text-white text-lg inline-block w-full text-center p-1 hover:bg-green-circle rounded-xl transition">Tim
                        Kami >
                    </a>
                </div>
            </nav>

        </header>
        <main>
            {{-- bagian 1 --}}
            <section id="dashboard">
                <div class="relative w-screen h-screen">
                    <img src="/img/elipse.png" alt="shape1" class="w-full h-full hidden sm:block object-cover">
                    <img src="/img/frame1.png" alt="shape1" class="w-full h-full sm:hidden object-cover">
                    <div
                        class=" flex flex-col sm:flex-row-reverse sm:justify-evenly justify-center items-center px-6 md:px-7 absolute top-0 right-0 left-0 bottom-0">
                        <div class="w-72 md:w-96 lg:w-[520px] xl:w-[800px]">
                            <img src="/img/locker1.png" alt="locker" class="w-full h-full object-cover">
                        </div>
                        <div class="max-w-96 xl:max-w-[750px]">
                            <h2 class="text-3xl lg:text-5xl xl:text-7xl text-white font-bold">Smart Locker</h2>
                            <p class="mb-4 md:mb-7 lg:text-lg text-white">Smart locker adalah inovasi yang dirancang untuk
                                memudahkan pengguna dalam meminjam loker dengan menggunakan teknologi modern seperti web
                                access.</p>
                            <a href="#deskripsi"
                                class="bg-white py-2 px-5 md:px-10 rounded-xl text-green-head hover:bg-slate-100">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="sm:hidden -mt-1">
                    <img src="/img/wave.png" alt="wave">
                </div>
            </section>
            {{-- bagian 2 --}}
            <section class="h-screen relative" id="deskripsi">
                <div
                    class="flex gap-5 md:gap-10 flex-col sm:flex-row sm:justify-around justify-center items-center absolute top-0 left-0 right-0 bottom-0">
                    <div class="w-64 md:w-96 lg:w-[450px] xl:w-[600px]">
                        <img src="/img/locker2.png" alt="locker" class="w-full h-full object-cover">
                    </div>
                    <div class="max-w-96 p-2">
                        <h2 class="text-3xl lg:text-4xl text-black font-bold">Deskripsi Produk</h2>
                        <p class="mb-4 md:mb-7 lg:text-lg text-black">Smart Locker adalah aplikasi web yang memungkinkan
                            pengguna mengakses dan mengelola loker pintar dengan mudah. Pengguna dapat membuka loker hanya
                            dengan menggunakan aplikasi web dengan cara masuk dengan kredensial. Setelah selesai, pengguna
                            dapat memberikan ulasan tentang inovasi produk ini. Aplikasi ini memiliki antarmuka yang
                            sederhana dan user-friendly.</p>
                    </div>
                </div>
            </section>
            {{-- bagian 3 --}}
            <section class="relative flex flex-col mb-7 " id="ulasan">
                <img src="/img/section3.png" alt="section3" class="hidden sm:block w-full object-cover">
                <div class="sm:hidden">
                    <img src="/img/wave2.png" alt="frame2" class="sm:hidden w-full object-cover">
                    <img src="/img/frame2.png" alt="frame2" class="sm:hidden w-screen h-screen object-cover">
                    <img src="/img/wave3.png" alt="frame2" class="sm:hidden w-full object-cover">
                </div>
                <div class="absolute top-12 min-[420px]:top-24 sm:pt-14 md:pt-16 lg:pt-40 xl:pt-64 left-0 right-0 p-2">
                    <div class="flex flex-col sm:flex-row sm:justify-around justify-center sm:gap-3">
                        <div class="sm:w-96 lg:w-[500px] xl:w-[780px] lg:mt-5">
                            <h2 class="font-bold text-lg mb-3 mx-2 lg:text-2xl xl:text-4xl text-black">Apa kata mereka</h2>
                            <div class="max-h-44 md:max-h-64 lg:max-h-80 overflow-y-auto">
                                <div>
                                    @if (!$review->isEmpty())
                                        @foreach ($review as $item)
                                            <div class="ulasan bg-yellow-comment max-h-24 p-2 mb-2 rounded-lg">
                                                <p class="text-sm lg:text-base tracking-wide font-bold mb-1 text-white">
                                                    {{ $item->nama }}
                                                </p>
                                                <p class="text-sm lg:text-base line-clamp-2 text-white">{{ $item->review }}
                                                </p>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="bg-yellow-comment max-h-24 p-2 mb-2 rounded-lg">
                                            <p class="text-sm lg:text-base tracking-wide font-bold mb-1 text-white">
                                                Belum ada ulasan
                                            </p>
                                            <p class="text-sm lg:text-base line-clamp-2 text-white">isi ulasan pada kolom
                                                disamping
                                            </p>
                                        </div>
                                    @endIf
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex justify-center">
                                <img src="/img/blob.png" alt=""
                                    class="w-[350px] sm:w-[380px] lg:w-[400px] xl:w-[500px]">
                            </div>
                            <form action="/index-review" method="post"
                                class="bg-green-head/60 rounded-md mt-4 p-2 absolute top-3 lg:top-9 right-0 left-0">
                                @csrf
                                <p class="text-white text-lg lg:text-xl font-bold text-center py-3">Kirimkan Pendapatmu</p>
                                <input type="text" name="nama" id="nama" placeholder="Masukan namamu"
                                    class="w-full p-2 border-2 border-white/70 bg-inherit my-2 lg:mb-4 rounded-md text-white focus:outline-none"
                                    autocomplete="off">
                                <textarea name="review" id="review" rows="4" placeholder="Masukan pendapatmu disini*"
                                    class="w-full bg-inherit rounded-md border-2 border-white/70 p-2 text-white focus:outline-none resize-none"></textarea>
                                <button type="submit"
                                    class="w-full p-1 bg-white text-black text-sm tracking-wider rounded-full my-1 md:text-base font-bold">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            {{-- bagian 4 --}}
            <section class="mb-7" id="tim">
                <h1 class="text-black font-bold text-3xl lg:text-4xl xl:text-5xl my-4 sm:my-12 mt-4 text-center">Tim Kami
                </h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                    <div class="">
                        <div class="w-52 h-52 xl:w-64 xl:h-64 overflow-hidden mx-auto">
                            <img src="/img/tim1.png" alt="tim1" class="w-full object-cover">
                        </div>
                        <div class="p-1 sm:my-1">
                            <h2 class="text-base sm:text-lg xl:text-xl font-bold text-black text-center sm:mb-1">Nabiilah
                                Putri
                                Afiifah
                            </h2>
                            <p class="text-sm text-black text-center">Lorem, ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="w-52 h-52 xl:w-64 xl:h-64 overflow-hidden mx-auto">
                            <img src="/img/tim2.png" alt="tim2" class="w-full object-cover">
                        </div>
                        <div class="p-1 sm:my-1">
                            <h2 class="text-base sm:text-lg xl:text-xl font-bold text-black text-center sm:mb-1">Muhamad
                                Fazril
                                Maulana
                            </h2>
                            <p class="text-sm text-black text-center">Lorem, ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="w-52 h-52 xl:w-64 xl:h-64 overflow-hidden mx-auto">
                            <img src="/img/tim3.png" alt="tim3" class="w-full object-cover">
                        </div>
                        <div class="p-1 sm:my-1">
                            <h2 class="text-base sm:text-lg xl:text-xl font-bold text-black text-center sm:mb-1">Gery
                                Satria
                                Halim
                            </h2>
                            <p class="text-sm text-black text-center">Lorem, ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="w-52 h-52 xl:w-64 xl:h-64 overflow-hidden mx-auto">
                            <img src="/img/tim4.png" alt="tim4" class="w-full object-cover">
                        </div>
                        <div class="p-1 sm:my-1">
                            <h2 class="text-base sm:text-lg xl:text-xl font-bold text-black text-center sm:mb-1">Mohamad
                                Rafi Al-Yahya
                            </h2>
                            <p class="text-sm text-black text-center">Lorem, ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- bagian 5 --}}
            <section class="p-8 mb-4">
                <div
                    class="bg-bluelight shadow-lg rounded-lg p-2 flex flex-col sm:flex-row sm:justify-around items-center">
                    <img src="/img/smartphone.png" alt="smartphone"
                        class="w-72 sm:w-80 md:w-1/3 xl:w-2/5 mx-auto sm:mx-0">
                    <div class="max-w-[460px]">
                        <h3 class="text-xl sm:text-2xl md:text-3xl xl:text-4xl py-2 font-bold text-black">Deskripsi
                            Aplikasi
                        </h3>
                        <p class="text-sm sm:text-base text-black md:text-lg">Smart Locker adalah aplikasi web untuk
                            mengakses dan mengelola loker pintar. Pengguna memindai QR code loker, masuk dengan username dan
                            password, dan jika loker terisi, maka akan ada peringatan pada login loker. Setelah masuk,
                            pengguna dapat mengelola loker. Antarmuka yang sederhana memastikan
                            kemudahan penggunaan.</p>
                    </div>
                </div>
            </section>
        </main>
        <footer class="">
            <div class="px-4">
                <div class="w-full h-[1px] bg-slate-400 rounded-md"></div>
            </div>
            <p class="p-7 text-sm sm:text-base text-black">© 2024 Copyright, AIo Tech-Smart Locker-Politeknik Negeri
                Jakarta
            </p>
        </footer>

        @if (session('info'))
            <div class="toast transition" id="toast">
                <div class="alert alert-info">
                    <span class="">{{ session('info') }}</span>
                </div>
            </div>
        @endif
    </body>
@endsection
