@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Peminjaman Ruang Kelas</h2>

    <!-- Form untuk menambah peminjaman -->
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_peminjam">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ruang_kelas">Ruang Kelas</label>
            <input type="text" name="ruang_kelas" id="ruang_kelas" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
            <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="waktu_mulai">Waktu Mulai</label>
            <input type="time" name="waktu_mulai" id="waktu_mulai" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="waktu_berakhir">Waktu Berakhir</label>
            <input type="time" name="waktu_berakhir" id="waktu_berakhir" class="form-control" required>
        </div>

        {{-- <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
            </select>
        </div> --}}

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
