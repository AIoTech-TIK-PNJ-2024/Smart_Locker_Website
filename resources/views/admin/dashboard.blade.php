@extends('layout.admin-layout')
@section('content')
    {{-- card card --}}
    @include('partials.admin-card')
    <div class="grid grid-cols-12 gap-5">
        {{-- table --}}
        <div class="grid-cols-12 col-span-12 lg:col-span-8">
            @include('partials.admin-table')
        </div>
        {{-- sentimen analysis --}}
        <div class="grid-cols-12 col-span-12 lg:col-span-4">
            @include('partials.admin-chart')
        </div>
    </div>
@endsection
