@extends('layout.locker-layout')
@section('content')
    <h2 class="lg:text-4xl text-2xl text-black font-extrabold lg:mb-6 mb-3 mt-2 leading-relaxed lg:px-5 lg:pt-10 px-2 pt-2">
        QR Code Locker 001</h2>

    @if (session('sukses'))
        <div role="alert" class="alert alert-info">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6 shrink-0 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ session('sukses') }}</span>
        </div>
    @endif
    {{-- <div class="card bg-white">
        <img src="../img/barcode.png" class="lg:w-1/2 w-full h-full bg-cover bg-center mx-auto" />
        <h3 class="lg:text-4xl text-2xl text-black font-bold lg:mb-6 mb-1 leading-relaxed lg:px-8 lg:pt-2 px-5 pt-1 mx-auto">
            Locker 001</h3>
        <p
            class="lg:text-3xl text-xl text-black font-semibold lg:mb-6 mb-3 leading-relaxed lg:px-8 text-center lg:pt-2 px-4 pt-1 mx-auto">
            Silahkan unduh QR Code anda untuk mengantisipasi hilangnya jaringan internet anda</p>
    </div> --}}
    <a href='/open-door'
        class="w-full text-center inline-block bg-green-head text-white py-3 my-4 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Buka
        Loker</a>
    <a href="/locker/end" type="submit"
        class="w-full inline-block text-center bg-transparent text-black border-green-head border-2 py-3 my-1 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Selesaikan
        Penggunaan</a>
@endsection
