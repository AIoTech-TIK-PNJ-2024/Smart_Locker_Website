@extends('layout.locker-layout')
@section('content')
<div class="card bg-white">
    <h2 class="lg:text-4xl text-2xl text-black font-extrabold lg:mb-6 mb-1 leading-relaxed lg:px-8 lg:pt-10 px-5 pt-5">Selamat datang di Smart Locker</h2>
    <form class="lg:px-8 px-5 pt-6 pb-9" action="/locker/verify_email">
        <label class="input bg-slate-300 flex items-center gap-2">
            <input type="text" class="grow font-medium text-slate-800" placeholder="Email" />
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>                      
        </label>
        <span class="label-text-alt text-black font-normal p-2 text-sm">Masukkan Email kalian</span>
        <button type="submit" class="w-full bg-green-head text-white py-3 my-8 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Masuk</button>
    </form>
</div>
@endsection