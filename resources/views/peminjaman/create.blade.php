@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <h2 class="mb-6 text-3xl font-semibold text-center">Tambah Peminjaman Ruang Kelas</h2>

    <!-- Form untuk menambah peminjaman -->
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama_peminjam" class="block text-sm font-medium text-gray-700">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" id="nama_peminjam" class="w-full p-3 mt-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="ruang_kelas" class="block text-sm font-medium text-gray-700">Ruang Kelas</label>
            <select name="ruang_kelas" id="ruang_kelas" class="w-full p-3 mt-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-500" required>
                <option value="">Pilih Ruang Kelas</option>
                @foreach ($ruangan as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_ruangan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="tanggal_peminjaman" class="block text-sm font-medium text-gray-700">Tanggal Peminjaman</label>
            <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="w-full p-3 mt-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="waktu_mulai" class="block text-sm font-medium text-gray-700">Waktu Mulai</label>
            <input type="time" name="waktu_mulai" id="waktu_mulai" class="w-full p-3 mt-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="waktu_berakhir" class="block text-sm font-medium text-gray-700">Waktu Berakhir</label>
            <input type="time" name="waktu_berakhir" id="waktu_berakhir" class="w-full p-3 mt-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-500" required>
        </div>

        <div class="flex justify-between">
            <!-- Tombol Simpan -->
            <button type="submit" class="w-1/2 px-6 py-3 mr-2 text-white transition duration-300 bg-blue-600 rounded-lg shadow-md hover:bg-blue-700">
                Simpan
            </button>

            <!-- Tombol Kembali -->
            <a href="{{ route('peminjaman.index') }}" class="w-1/2 px-6 py-3 ml-2 text-center text-white transition duration-300 bg-gray-500 rounded-lg shadow-md hover:bg-gray-600">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection
