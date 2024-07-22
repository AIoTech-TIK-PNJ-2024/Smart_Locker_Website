@extends('layout.admin-layout')
@section('content')
<!-- <h1>Daftar Ulasan</h1> -->
<div class="bg-white rounded-sm shadow-md mb-4">
    <div class="bg-white shadow-md flex items-center justify-between p-4">
        <h2 class="text-2xl text-slate-600 font-bold mx-2">Daftar Ulasan</h2>
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href=" /admin-dashboard">Dashboard</a></li>
                <li>Daftar Ulasan</li>
            </ul>
        </div>
    </div>

    <div class="overflow-x-auto p-2 sm:p-1 md:p-2">
        <table class="table">
            <!-- head -->
            <thead>
                <tr class="bg-gray-400/20">
                    <th class="p-2 text-center md:text-sm">NO</th>
                    <th class="p-2 text-center md:text-sm">USERNAME</th>
                    <th class="p-2 text-center md:text-sm">ULASAN</th>
                    <th class="p-2 text-center md:text-sm">SENTIMEN</th>
                    <th class="p-2 text-center md:text-sm">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $ulasan as $item )
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">{{ $loop->iteration }}</td>
                    <td class="text-xs lg:text-sm p-2 text-center">{{ $item->nama }}</td>
                    <td class="text-xs lg:text-sm p-2 text-center">{{ $item->review }}</td>
                    <td class="text-xs lg:text-sm p-2 text-center font-bold">{{ $item->sentimen }}</td>
                    <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection