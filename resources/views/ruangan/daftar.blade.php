@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Ruangan</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>Nama_peminjam</th>
                <th>Nama Ruangan</th>
                <th>Status</th>
                <th>Tanggal Peminjaman</th>
                <th>Waktu Mulai</th>
                <th>Waktu Berakhir</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ruangan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_ruangan }}</td>
                <td>
                    <span class="badge bg-{{ $item->status === 'tersedia' ? 'success' : 'danger' }}">
                        {{ ucfirst($item->status) }}
                    </span>
                </td>
                <td>{{ $item->tanggal_peminjaman ?? '-' }}</td>
                <td>{{ $item->waktu_mulai ?? '-' }}</td>
                <td>{{ $item->waktu_berakhir ?? '-' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada ruangan yang tersedia</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
