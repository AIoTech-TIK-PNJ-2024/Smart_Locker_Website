@extends('layout.head')
@section('body')
<body class="bg-slate-200 lg:h-screen h-full w-lvh">
    {{-- header --}}
    @include('partials.locker-header')
    {{-- main-content --}}
    <section class="lg:flex lg:h-full items-center justify-center w-full">
        <img src="../img/locker-page.png" class="lg:w-1/2 w-full h-full pt-10 bg-cover bg-center"/>
        <div class="lg:w-1/2 p-5 lg:p-10">
            {{-- content --}}
            @yield('content')
        </div>
    </section>
</body>
@endsection