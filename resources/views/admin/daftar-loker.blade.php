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
                    <th class="p-2 text-center md:text-sm">NO</th>
                    <th class="p-2 text-center md:text-sm">NOMOR LOCKER</th>
                    <th class="p-2 text-center md:text-sm">STATUS LOCKER</th>
                    <th class="p-2 text-center md:text-sm">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">1</td>
                    <td class="text-xs lg:text-sm p-2 text-center">Locker 1
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">Kosong</td>
                    <td class="text-xs lg:text-sm p-2 text-center flex gap-2 justify-center"><button
                            class="btn btn-warning">Reset</button><button class="btn btn-success">Open</button></td>
                </tr>
                <!-- row 2 -->
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">2</td>
                    <td class="text-xs lg:text-sm p-2 text-center">Locker 2
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">Kosong</td>
                    <td class="text-xs lg:text-sm p-2 text-center flex gap-2 justify-center"><button
                            class="btn btn-warning">Reset</button><button class="btn btn-success">Open</button></td>
                </tr>
                <!-- row 3 -->
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">3</td>
                    <td class="text-xs lg:text-sm p-2 text-center">Locker 3
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">Terisi</td>
                    <td class="text-xs lg:text-sm p-2 text-center flex gap-2 justify-center"><button
                            class="btn btn-warning">Reset</button><button class="btn btn-success">Open</button></td>
                </tr>
                <!-- row 4 -->
                <tr>
                    <td class="text-xs lg:text-sm p-2 text-center">4</td>
                    <td class="text-xs lg:text-sm p-2 text-center">Locker 4
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">Terisi</td>
                    <td class="text-xs lg:text-sm p-2 text-center flex gap-2 justify-center"><button
                            class="btn btn-warning">Reset</button><button class="btn btn-success">Open</button></td>
                </tr>
            </tbody>

        </table>
    </div>
</div>


@endsection