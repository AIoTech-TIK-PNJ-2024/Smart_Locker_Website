@extends('layout.admin-layout')
@section('content')
    {{-- data sentimen pada chart (hidden) --}}
    {{-- {{ dump($sentimenData['positive']) }}
    {{ dump($sentimenData['negative']) }}
    {{ dd($sentimenData['neutral']) }} --}}
    <span class="hidden" id="positiveData">{{ $sentimenData['positive'] }}</span>
    <span class="hidden" id="negativeData">{{ $sentimenData['negative'] }}</span>
    <span class="hidden" id="neutralData">{{ $sentimenData['neutral'] }}</span>
    <span class="hidden" id="emptyData">{{ $sentimenData['emptyData'] }}</span>
    {{-- card card --}}
    @include('partials.admin-card')
    <div class="grid grid-cols-12 gap-3 min-h-[430px]">
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
