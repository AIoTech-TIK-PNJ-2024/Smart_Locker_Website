@extends('layout.locker-layout')
@section('content')
    <h2 class="lg:text-4xl text-2xl text-black font-extrabold lg:mb-6 mb-3 mt-2 leading-relaxed lg:px-5 lg:pt-10 px-2 pt-2">
        QR Code Locker 001</h2>
    <div class="card bg-white">
        {{-- contoh hardcode ambil gambar dari generate qrcode --}}
        <img src="{{ asset('storage/qrcodes/6632192.png') }}" class="lg:w-1/2 w-full h-full bg-cover bg-center mx-auto" />
        <h3 class="lg:text-4xl text-2xl text-black font-bold lg:mb-6 mb-1 leading-relaxed lg:px-8 lg:pt-2 px-5 pt-1 mx-auto">
            Locker 001</h3>
        <p
            class="lg:text-3xl text-xl text-black font-semibold lg:mb-6 mb-3 leading-relaxed lg:px-8 text-center lg:pt-2 px-4 pt-1 mx-auto">
            Silahkan unduh QR Code anda untuk mengantisipasi hilangnya jaringan internet anda</p>
    </div>
    <button
        class="w-full bg-green-head text-white py-3 my-4 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Unduh
        QR Code</button>
    <button type="submit"
        class="w-full bg-transparent text-black border-green-head border-2 py-3 my-1 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Selesaikan
        Penggunaan</button>
@endsection
