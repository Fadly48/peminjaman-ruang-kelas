@extends('layouts.app')

@section('content')
<div class="container px-6 mx-auto mt-8">
    <h2 class="mb-8 text-3xl font-semibold text-center">Dashboard Peminjaman Ruang Kelas</h2>

    <!-- Tombol Tambah Peminjaman -->
    <a href="{{ route('peminjaman.create') }}" class="inline-block px-6 py-3 mb-6 text-white transition duration-300 ease-in-out bg-blue-600 rounded-lg shadow-md hover:bg-blue-700">
        Tambah Peminjaman
    </a>

    <!-- Tabel Peminjaman -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
        <table class="min-w-full table-auto">
            <thead class="text-white bg-gray-800">
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Nama Peminjam</th>
                    <th class="px-6 py-3 text-left">Ruang Kelas</th>
                    <th class="px-6 py-3 text-left">Tanggal Peminjaman</th>
                    <th class="px-6 py-3 text-left">Waktu Mulai</th>
                    <th class="px-6 py-3 text-left">Waktu Berakhir</th>
                    <th class="px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $item)
                <tr class="border-t hover:bg-gray-100">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->nama_peminjam }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->ruang_kelas }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ \Carbon\Carbon::parse($item->tanggal_peminjaman)->format('d-m-Y') }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ \Carbon\Carbon::parse($item->waktu_mulai)->format('H:i') }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ \Carbon\Carbon::parse($item->waktu_berakhir)->format('H:i') }}</td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-3">
                            <!-- Tombol Edit -->
                            <a href="{{ route('peminjaman.edit', $item->id) }}" class="px-4 py-2 text-white transition duration-300 bg-yellow-500 rounded-md hover:bg-yellow-600">
                                Edit
                            </a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 text-white transition duration-300 bg-red-500 rounded-md hover:bg-red-600">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
