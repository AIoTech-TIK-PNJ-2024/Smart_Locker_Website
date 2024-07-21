@extends('layout.head')
@section('body')
    <section class="h-screen"
        style="background-image: url('./img/bg-locker.jpg'); background-repeat: no-repeat; background-size: cover">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 backdrop-blur-md bg-white/30 white:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Sign in to admin account
                    </h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first('error') }}
                        </div>
                    @endif
                    <form class="space-y-4 md:space-y-6" action="/admin-authentication" method='POST'>
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                email</label>
                            <input type="email" name="email" autofocus
                                class="text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 backdrop-blur-xl bg-white/30 white:border-gray-700"
                                placeholder="name@company.com">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" name="password" placeholder="••••••••"
                                class="text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 backdrop-blur-xl bg-white/30 white:border-gray-700">
                            @error('password')
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full mb-2 text-white bg-slate-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   ">Sign In</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
