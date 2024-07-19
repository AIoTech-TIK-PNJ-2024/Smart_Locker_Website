@extends('layout.admin-layout')
@section('content')
    <!-- <h1>Riwayat peminjaman</h1> -->
    <div class="bg-white rounded-sm shadow-md mb-4">
        <div class="bg-white shadow-md flex items-center justify-between p-4">
            <h2 class="text-2xl text-slate-600 font-bold mx-2">Riwayat Peminjaman</h2>
            <div class="breadcrumbs text-sm">
                <ul>
                    <li><a href=" /admin-dashboard">Dashboard</a></li>
                    <li>Riwayat Peminjaman</li>
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
                        <th class="p-2 text-center md:text-sm">NO LOCKER</th>
                        <th class="p-2 text-center md:text-sm">BARCODE</th>
                        <th class="p-2 text-center md:text-sm hidden min-[470px]:block">WAKTU PINJAM</th>
                        <th class="p-2 text-center md:text-sm">DURASI PINJAM</th>
                        <th class="p-2 text-center md:text-sm">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td class="text-xs lg:text-sm p-2 text-center">1</td>
                        <td class="p-2 text-xs lg:text-sm">Nabiilah Putri Afiifah</td>
                        <td class="text-xs lg:text-sm p-2 text-center">4</td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden lg:table-cell">124512
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden min-[470px]:table-cell">22/03/2023, 14:12
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center">20 menit</td>
                        <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button></td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td class="text-xs lg:text-sm p-2 text-center">2</td>
                        <td class="p-2 text-xs lg:text-sm">Muhamad Fazril Maulana</td>
                        <td class="text-xs lg:text-sm p-2 text-center">1</td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden lg:table-cell">765309
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden min-[470px]:table-cell">22/03/2023, 14:12
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center">20 menit</td>
                        <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button></td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <td class="text-xs lg:text-sm p-2 text-center">3</td>
                        <td class="p-2 text-xs lg:text-sm">Gerry Satria Halim</td>
                        <td class="text-xs lg:text-sm p-2 text-center">3</td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden lg:table-cell">096874
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden min-[470px]:table-cell">22/03/2023, 14:12
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center">20 menit</td>
                        <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button></td>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                        <td class="text-xs lg:text-sm p-2 text-center">4</td>
                        <td class="p-2 text-xs lg:text-sm">Mohamad Rafi Al-Yahya</td>
                        <td class="text-xs lg:text-sm p-2 text-center">2</td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden lg:table-cell">459176
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center hidden min-[470px]:table-cell">22/03/2023, 14:12
                        </td>
                        <td class="text-xs lg:text-sm p-2 text-center">20 menit</td>
                        <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
@endsection
