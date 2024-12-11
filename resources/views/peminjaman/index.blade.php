@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <h2 class="mb-6 text-3xl font-semibold text-center">Daftar Peminjaman</h2>

    <!-- Tombol Tambah Peminjaman -->
    <a href="{{ route('peminjaman.create') }}" class="inline-block px-6 py-3 mb-4 text-white transition duration-300 bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700">
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
                    <th class="px-6 py-3 text-left">Status</th>
                    <th class="px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $item)
                <tr class="border-t">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->nama_peminjam }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->ruang_kelas }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ \Carbon\Carbon::parse($item->tanggal_peminjaman)->format('d-m-Y') }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ \Carbon\Carbon::parse($item->waktu_mulai)->format('H:i') }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ \Carbon\Carbon::parse($item->waktu_berakhir)->format('H:i') }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">
                        @if ($item->status == 'pending')
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-yellow-400 rounded-full">Pending</span>
                        @elseif ($item->status == 'disetujui')
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">Disetujui</span>
                        @elseif ($item->status == 'selesai')
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Selesai</span>
                        @else
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-gray-500 rounded-full">Tidak Diketahui</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-3">
                            <!-- Edit Button -->
                            <a href="{{ route('peminjaman.edit', $item->id) }}" class="inline-block px-4 py-2 text-white transition duration-300 bg-yellow-500 rounded-md hover:bg-yellow-600">
                                Edit
                            </a>

                            <!-- Hapus Button -->
                            <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block px-4 py-2 text-white transition duration-300 bg-red-500 rounded-md hover:bg-red-600">
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
