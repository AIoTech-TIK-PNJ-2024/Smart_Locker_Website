@extends('layout.locker-layout')
@section('content')
    <div class="card bg-white">
        <h2 class="lg:text-4xl text-2xl text-black font-extrabold lg:mb-6 mb-1 leading-relaxed lg:px-8 lg:pt-10 px-5 pt-5">
            Selamat datang di Smart Locker</h2>
        <p class="lg:text-lg text-base text-black mb-1 leading-relaxed lg:px-8 px-5 pt-5">
            Lakukan pengisian data dibawah ini untuk meminjam loker</p>
        <form class="lg:px-8 px-5 pt-6 pb-9" action="/locker/login" method="post">
            @csrf
            <div class="input bg-slate-300 flex items-center gap-2">
                <input type="text" name="username" class="grow font-medium text-slate-800" placeholder="Masukan Username"
                    value="{{ old('username') }}" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                    class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
            @error('username')
                <span class="label-text-alt p-2 text-red-600 font-normal text-base">{{ $message }}</span>
            @enderror
            <div class="input mt-2 bg-slate-300 flex items-center gap-2">
                <input type="password" name="password" class="grow font-medium text-slate-800"
                    placeholder="Masukan Password" />
                <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    stroke-width="2">
                    <path
                        d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM5 12V20H19V12H5ZM11 14H13V18H11V14ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17Z">
                    </path>
                </svg>
            </div>
            @error('password')
                <span class="label-text-alt p-2 text-red-600 font-normal text-base">{{ $message }}</span>
            @enderror
            <button type="submit"
                class="w-full bg-green-head text-white py-3 my-8 rounded-full font-medium focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Masuk</button>
            @error('failed')
                <div role="alert" class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </form>
    </div>
@endsection
