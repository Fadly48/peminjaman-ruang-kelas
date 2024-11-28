@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Peminjaman Ruang Kelas</h2>

    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Peminjam</th>
                <th>Ruang Kelas</th>
                <th>Tanggal Peminjaman</th>
                <th>Waktu Mulai</th>
                <th>Waktu Berakhir</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_peminjam }}</td>
                <td>{{ $item->ruang_kelas }}</td>
                <td>{{ $item->tanggal_peminjaman }}</td>
                <td>{{ $item->waktu_mulai }}</td>
                <td>{{ $item->waktu_berakhir }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Delete Button (with confirmation modal) -->
                    <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
