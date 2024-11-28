@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Peminjaman Ruang Kelas</h2>
    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Metode PUT untuk update data -->

        <div class="form-group">
            <label for="nama_peminjam">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" value="{{ $peminjaman->nama_peminjam }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ruang_kelas">Ruang Kelas</label>
            <input type="text" name="ruang_kelas" value="{{ $peminjaman->ruang_kelas }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
            <input type="date" name="tanggal_peminjaman" value="{{ $peminjaman->tanggal_peminjaman }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="waktu_mulai">Waktu Mulai</label>
            <input type="time" name="waktu_mulai" value="{{ $peminjaman->waktu_mulai }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="waktu_berakhir">Waktu Berakhir</label>
            <input type="time" name="waktu_berakhir" value="{{ $peminjaman->waktu_berakhir }}" class="form-control" required>
        </div>
        

        <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
    </form>
</div>
@endsection
