@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto mt-8">
    <h2 class="mb-6 text-3xl font-semibold">Tambah Peminjaman Ruang Kelas</h2>

    <!-- Form untuk menambah peminjaman -->
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama_peminjam" class="block text-sm font-medium text-gray-700">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="ruang_kelas" class="block text-sm font-medium text-gray-700">Ruang Kelas</label>
            <select name="ruang_kelas" class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @foreach ($ruangans as $ruangan)
                    <option value="{{ $ruangan->id }}" @if($ruangan->status == 'terisi') disabled @endif>{{ $ruangan->nama_ruangan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="tanggal_peminjaman" class="block text-sm font-medium text-gray-700">Tanggal Peminjaman</label>
            <input type="date" name="tanggal_peminjaman" class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="waktu_mulai" class="block text-sm font-medium text-gray-700">Waktu Mulai</label>
            <input type="time" name="waktu_mulai" class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="waktu_berakhir" class="block text-sm font-medium text-gray-700">Waktu Berakhir</label>
            <input type="time" name="waktu_berakhir" class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <button type="submit" class="w-full py-3 mt-3 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Simpan</button>
    </form>
</div>
@endsection
