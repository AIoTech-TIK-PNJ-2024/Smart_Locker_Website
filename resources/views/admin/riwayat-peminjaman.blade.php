@extends('layout.admin-layout')
@section('content')
    <!-- <h1>Riwayat Peminjaman</h1> -->
    <div class="bg-white rounded-sm shadow-md mb-4">
        <div class="bg-white shadow-md flex items-center justify-between p-4">
            <h2 class="text-2xl text-slate-600 font-bold mx-2">Riwayat Peminjaman</h2>
        </div>

        <div class="overflow-x-auto p-2 sm:p-1 md:p-2">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr class="bg-gray-400/20">
                        <th class="p-2 text-center md:text-sm">NO</th>
                        <th class="p-2 text-center md:text-sm">USERNAME</th>
                        <th class="p-2 text-center md:text-sm">ID LOCKER</th>
                        <th class="p-2 text-center md:text-sm hidden min-[470px]:block">WAKTU PINJAM</th>
                        <th class="p-2 text-center md:text-sm">DURASI PINJAM</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td class="text-xs lg:text-sm p-2 text-center">1</td>
                        <td class="p-2 text-xs lg:text-sm">Nabiilah Putri Afiifah</td>
                        <td class="text-xs lg:text-sm p-2 text-center">4</td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden min-[470px]:table-cell">22/03/2023, 14:12
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center">20 menit</td>
                    </tr>
                    <!-- row 1 -->
                    <tr>
                        <td class="text-xs lg:text-sm p-2 text-center">2</td>
                        <td class="p-2 text-xs lg:text-sm">Nabiilah Putri Afiifah</td>
                        <td class="text-xs lg:text-sm p-2 text-center">4</td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden min-[470px]:table-cell">22/03/2023, 14:12
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center">20 menit</td>
                    </tr>
                    <!-- row 1 -->
                    <tr>
                        <td class="text-xs lg:text-sm p-2 text-center">3</td>
                        <td class="p-2 text-xs lg:text-sm">Nabiilah Putri Afiifah</td>
                        <td class="text-xs lg:text-sm p-2 text-center">4</td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden min-[470px]:table-cell">22/03/2023, 14:12
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center">20 menit</td>
                    </tr>
                    <!-- row 1 -->
                    <tr>
                        <td class="text-xs lg:text-sm p-2 text-center">4</td>
                        <td class="p-2 text-xs lg:text-sm">Nabiilah Putri Afiifah</td>
                        <td class="text-xs lg:text-sm p-2 text-center">4</td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden min-[470px]:table-cell">22/03/2023, 14:12
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center">20 menit</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="md:p-4 overflow-x-auto text-center bg-white">
            <div class="join">
                <input class=" join-item btn btn-square bg-white" type="radio" name="options" aria-label="1"
                    checked="checked" />
                <input class="join-item btn btn-square bg-white" type="radio" name="options" aria-label="2" />
                <input class="join-item btn btn-square bg-white" type="radio" name="options" aria-label="3" />
                <input class="join-item btn btn-square bg-white" type="radio" name="options" aria-label="4" />
            </div>
        </div>
    </div>
@endsection
