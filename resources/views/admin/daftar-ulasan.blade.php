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
                    <th class="p-2 text-center md:text-sm">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">1</td>
                    <td class="text-xs lg:text-sm p-2 text-center">nabilaifa26
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">Locker ini sangat bagus, menarik, aman, dan mudah di
                        gunakan</td>
                    <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button>
                    </td>
                </tr>
                <!-- row 2 -->
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">2</td>
                    <td class="text-xs lg:text-sm p-2 text-center">fazrilgaming
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">Locker dapat di gunakan dengan baik, tetapi sayang
                        nya locker kotor</td>
                    <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button></td>
                </tr>
                <!-- row 3 -->
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">3</td>
                    <td class="text-xs lg:text-sm p-2 text-center">gerrylim
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">JELEK BANGET, BAU, LUPA PASSWORD MALAH GA DI LADENIN
                        SAMA ADMINNYA </td>
                    <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button></td>
                </tr>
                <!-- row 4 -->
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">4</td>
                    <td class="text-xs lg:text-sm p-2 text-center">rfikeceh
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">biasa aja si, ya lumayan lah ya</td>
                    <td class="text-xs lg:text-sm p-2 text-center"><button class="btn btn-error">Hapus</button></td>
                </tr>
            </tbody>

        </table>
    </div>
</div>


@endsection