@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto mt-8">
    <h2 class="mb-6 text-3xl font-semibold text-center">Daftar Ruangan</h2>

    <!-- Tombol Tambah Ruangan -->
    <a href="{{ route('ruangan.create') }}" class="inline-block px-6 py-3 mb-4 text-white transition duration-300 bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700">
        Tambah Ruangan
    </a>

    <!-- Tabel Daftar Ruangan -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
        <table class="min-w-full table-auto">
            <thead class="text-white bg-gray-800">
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Nama Ruangan</th>
                    <th class="px-6 py-3 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ruangan as $item)
                <tr class="border-t">
                    <td class="px-6 py-3 text-sm text-gray-700">{{ $loop->iteration }}</td>
                    <td class="px-6 py-3 text-sm text-gray-700">{{ $item->nama_ruangan }}</td>
                    <td class="px-6 py-3 text-sm text-gray-700">
                        @if ($item->status == 'terpinjam')
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded-full">Terpinjam</span>
                        @else
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">Tersedia</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-3 text-center text-gray-500">Ruangan Kosong</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
