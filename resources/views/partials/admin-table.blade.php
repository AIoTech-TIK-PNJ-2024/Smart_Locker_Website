<div class="bg-white rounded-sm h-full shadow-md mb-4">
    <h2 class="p-3 text-2xl text-slate-600 font-bold mx-2">Data Loker</h2>
    <div class="overflow-x-auto overflow-y-auto p-2 sm:p-1 md:p-2">
        <table class="table">
            <!-- head -->
            <thead>
                <tr class="bg-gray-400/20">
                    <th class="p-2 text-center md:text-sm">NO</th>
                    <th class="p-2 text-center md:text-sm">PEMINJAM</th>
                    <th class="p-2 text-center md:text-sm">BARCODE</th>
                    <th class="p-2 text-center md:text-sm">LOKER</th>
                    <th class="p-2 text-center md:text-sm">WAKTU PINJAM</th>
                    <th class="p-2 text-center md:text-sm">DURASI PINJAM</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td class="text-xs lg:text-sm">{{ $loop->iteration }}</td>
                    <td class="text-xs lg:text-sm">{{ $item->username }}</td>
                    <td class="text-xs lg:text-sm p-2 text-center">{{ $item->kode_barcode }}
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">{{ $item->id_locker }}</td>
                    <td class="text-xs lg:text-sm p-2 text-center">{{ $item->created_at }}
                    </td>
                    <td class="text-xs lg:text-sm p-2 text-center">{{ $item->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>