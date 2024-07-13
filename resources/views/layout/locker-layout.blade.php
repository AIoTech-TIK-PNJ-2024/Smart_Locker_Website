@extends('layout.head')
@section('body')
<body class="bg-slate-200 h-lvh w-lvh">
    <header class="lg:absolute w-full">
        <div class="navbar bg-green-head rounded-br-3xl">
            <div class="navbar-start">
                <div class="btn btn-ghost ms-2 lg:ms-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>                      
                </div>
            </div>
          </div>
    </header>
    <section class="lg:flex lg:h-full items-center justify-center w-full">
        <div class="lg:w-1/2 bg-cover bg-center rounded-l-lg" style="background-image: url('/path/to/your/image.png');">
            <p class="text-center font-bold text-black py-10">Image</p>
        </div>
        <div class="lg:w-1/2 p-8">
            <h2 class="text-2xl text-black font-bold mb-6">Selamat datang di Smart Locker</h2>
            <form>
                <label class="input bg-slate-300 flex items-center gap-2">
                    <input type="text" class="grow font-medium text-slate-800" placeholder="Email" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>                      
                </label>
                <span class="label-text-alt text-black font-normal">Masukkan Email kalian</span>
                <button type="submit" class="w-full bg-green-head text-white py-2 my-6 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Masuk</button>
            </form>
        </div>
    </section>
</body>
@endsection