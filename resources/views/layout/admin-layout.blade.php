@extends('layout.head')
@section('body')

    <body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100" style="font-family: poppins">
        <div class="flex relative">
            <!-- Sidebar -->
            @include('partials.admin-sidebar')

            <!-- Main content -->
            <div class="sm:ml-64 flex-1 flex flex-col min-h-screen">
                <!-- Header -->
                @include('partials.admin-header')

                <!-- Content -->
                <main class="flex-1 p-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
@endsection
