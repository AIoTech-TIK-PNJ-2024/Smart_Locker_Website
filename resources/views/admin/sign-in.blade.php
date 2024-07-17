@extends('layout.head')
@section('body')
<!-- <a href="/admin-dashboard">
    <h1><button class="btn btn-error">sign in admin</button></h1>
</a> -->
<section class="h-screen"
    style="background-image: url('./img/bg-locker.jpg'); background-repeat: no-repeat; background-size: cover">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 backdrop-blur-md bg-white/30 white:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Sign in to admin account
                </h1>
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                            email</label>
                        <input type="email"
                            class="text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 backdrop-blur-xl bg-white/30 white:border-gray-700 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@company.com">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                        <input type="password" placeholder="••••••••"
                            class="text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 backdrop-blur-xl bg-white/30 white:border-gray-700 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <button type="submit"
                        class="w-full mb-2 text-white bg-slate-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"><a
                            href="/admin-dashboard">Sign
                            in</a></button>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection