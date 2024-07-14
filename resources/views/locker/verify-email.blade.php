@extends('layout.locker-layout')
@section('content')
<h2 class="lg:text-4xl text-3xl text-black font-bold mb-10 leading-relaxed">Selamat datang di Smart Locker</h2>
<p class="text-center font-medium text-black mb-6">Cek email na***a@gmail.com untuk mengetahui OTP Anda</p>
<form action="">
    <div class="flex items-center justify-center gap-3">
        <input
            type="text"
            class="w-14 h-14 text-center text-2xl font-bold text-slate-900 bg-slate-100 border border-green-head rounded-md stroke-2 appearance-none p-4 outline-none"
            pattern="\d*" maxlength="1" />
        <input
            type="text"
            class="w-14 h-14 text-center text-2xl font-bold text-slate-900 bg-slate-100 border border-green-head rounded-md stroke-2 appearance-none p-4 outline-none"
            maxlength="1" />
        <input
            type="text"
            class="w-14 h-14 text-center text-2xl font-bold text-slate-900 bg-slate-100 border border-green-head rounded-md stroke-2 appearance-none p-4 outline-none"
            maxlength="1" />
        <input
            type="text"
            class="w-14 h-14 text-center text-2xl font-bold text-slate-900 bg-slate-100 border border-green-head rounded-md stroke-2 appearance-none p-4 outline-none"
            maxlength="1" />
    </div>
    <p class="text-center font-medium text-black">Tidak menerima kode? <a class="font-bold">Kirim Ulang<a></p>
    <button type="submit" class="w-full bg-green-head text-white py-3 my-8 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Masuk</button>
</form>
@endsection