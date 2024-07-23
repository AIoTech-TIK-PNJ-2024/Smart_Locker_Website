@extends('layout.locker-layout')
@section('content')

<div class="pt-20">
    <h2 class="lg:text-4xl text-2xl text-black font-extrabold lg:mb-6 mb-3 lg:text-center leading-relaxed lg:px-5 lg:pt-10 px-2">
        Terimakasih telah menggunakan Smart Locker!
    </h2>
    <div class="card bg-white">
        <img src="../img/barcode.png" class="w-1/2 h-1/2 bg-cover bg-center mx-auto" />
        <h3 class="lg:text-3xl text-2xl text-black font-bold leading-relaxed lg:px-8 lg:pt-2 px-5 pt-1 text-center">
            Scan QR Code diatas untuk memberikan kritik dan saran
        </h3>
        <p class="lg:text-2xl text-lg text-black font-semibold leading-relaxed text-center lg:pt-2 px-8 pt-1 pb-3">
            Kritik dan Saran anda dapat membantu kami meningkatkan kualitas pelayanan :)
        </p>
    </div>
    <div class="py-5">
        <button class="w-full bg-green-head text-white py-3 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Beralih ke Kritik dan Saran</button>
    </div>
</div>
@endsection