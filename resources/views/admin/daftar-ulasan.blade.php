@extends('layout.admin-layout')
@section('content')
    <!-- <h1>Daftar Ulasan</h1> -->
    <div class="bg-white rounded-sm shadow-md mb-4">
        <div class="bg-white shadow-md flex items-center justify-between p-4">
            <h2 class="text-2xl text-slate-600 font-bold mx-2">Daftar Ulasan</h2>
        </div>
        <div class="overflow-x-auto p-2 sm:p-1 md:p-2">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr class="bg-gray-400/20">
                        <th class="p-2 text-center md:text-sm">ID</th>
                        <th class="p-2 text-center md:text-sm">USERNAME</th>
                        <th class="p-2 text-center md:text-sm">ULASAN</th>
                        <th class="p-2 text-center md:text-sm">SENTIMEN</th>
                        <th class="p-2 text-center md:text-sm">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ulasan as $item)
                        <tr>
                            <td class="text-xs lg:text-sm p-2 text-center">{{ $item->id }}</td>
                            <td class="text-xs lg:text-sm p-2 text-center">{{ $item->nama }}</td>
                            <td class="text-xs lg:text-sm p-2 text-center">{{ $item->review }}</td>
                            <td
                                class="text-xs lg:text-sm p-2 text-center font-bold
                            @if ($item->sentimen === 'Positive') text-green-600
                            @elseif ($item->sentimen === 'Neutral') text-gray-600
                            @elseif ($item->sentimen === 'Negative') text-red-600 @endif
                            ">
                                {{ $item->sentimen }}</td>
                            <td class="text-xs lg:text-sm p-2 text-center">
                                <a href="#modal_delete_{{ $item->id }}" class="btn btn-error text-white">Hapus
                                </a>
                                <div class="modal" role="dialog" id="modal_delete_{{ $item->id }}">
                                    <div class="modal-box">
                                        <h3 class="text-lg font-bold">Konfirmasi</h3>
                                        <p class="py-4">Apakah anda yakin mau menghapus ulasan ini</p>
                                        <div class="modal-action">
                                            <form action="/admin-daftar-ulasan-delete" method="post">
                                                @csrf
                                                <input name="id" type="text" class="hidden"
                                                    value="{{ $item->id }}">
                                                <a href="#" class="btn">
                                                    Kembali
                                                </a>
                                                <button type="submit" class="btn btn-error text-white">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class=" p-2 mx-3">
            {{ $ulasan->links() }}
        </div>
    </div>
    @if (session('info'))
        <div class="toast transition" id="toast-delete">
            <div class="alert alert-info">
                <span class="">{{ session('info') }}</span>
            </div>
        </div>
    @endif
@endsection
