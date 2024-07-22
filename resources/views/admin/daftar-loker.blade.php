@extends('layout.admin-layout')
@section('content')
<!-- <h1>Daftar Locker</h1> -->
<div class="bg-white rounded-sm shadow-md mb-4">
    <div class="bg-white shadow-md flex items-center justify-between p-4">
        <h2 class="text-2xl text-slate-600 font-bold mx-2">Daftar Locker</h2>
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href=" /admin-dashboard">Dashboard</a></li>
                <li>Daftar Locker</li>
            </ul>
        </div>
    </div>

    <div class="overflow-x-auto p-2 sm:p-1 md:p-2">
        <table class="table">
            <!-- head -->
            <thead>
                <tr class="bg-gray-400/20">
                    <th class="p-2 text-center text-sm sm:text-base">NO</th>
                    <th class="p-2 text-center text-sm sm:text-base">NOMOR LOCKER</th>
                    <th class="p-2 text-center text-sm sm:text-base">STATUS LOCKER</th>
                    <th class="p-2 text-center text-sm sm:text-base">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($locker as $item)
                <tr>
                    <td class="text-xs sm:text-sm md:text-base p-2 text-center">{{ $loop->iteration }}</td>
                    <td class="text-xs sm:text-sm md:text-base p-2 text-center">{{ $item->nomor_locker }}</td>
                    <td class="text-xs sm:text-sm md:text-base p-2 text-center">
                        {{ $item->status_locker == 0 ? 'kosong' : 'terisi' }}</td>
                    <td class="text-xs sm:text-sm md:text-base p-2 text-center flex gap-2 justify-center">
                        <a href="" class="btn btn-warning">Reset</a>
                        <a href="" class="btn btn-success">Open</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection