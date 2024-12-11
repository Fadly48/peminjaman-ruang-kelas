<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Ruangan;

class PeminjamanController extends Controller
{
    // Menampilkan semua data peminjaman
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    // Menampilkan form untuk membuat peminjaman baru
    public function create()
    {
        // Mengambil semua data ruangan yang statusnya 'tersedia'
        $ruangan = Ruangan::where('status', 'tersedia')->get();

        // Mengirim data ruangan ke view
        return view('peminjaman.create', compact('ruangan'));
    }

    // Menyimpan data peminjaman baru ke database
    public function store(Request $request)
    {
        // Validasi data peminjaman
        $validated = $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'ruang_kelas' => 'required|exists:ruangan,id', // Validasi ruang kelas yang ada
            'tanggal_peminjaman' => 'required|date',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_berakhir' => 'required|date_format:H:i|after:waktu_mulai', // pastikan waktu berakhir setelah waktu mulai
        ]);

        // Simpan data peminjaman ke dalam database
        $peminjaman = Peminjaman::create($validated);

        // Update status ruang kelas menjadi 'terpinjam'
        $ruangan = Ruangan::find($request->ruang_kelas);
        $ruangan->status = 'terpinjam';
        $ruangan->save();

        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit data peminjaman
    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $ruangan = Ruangan::where('status', 'tersedia')->get(); // Ambil ruangan yang statusnya 'tersedia'
        return view('peminjaman.edit', compact('peminjaman', 'ruangan'));
    }

    // Memperbarui data peminjaman di database
    public function update(Request $request, $id)
    {
        // Validasi data peminjaman
        $validated = $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'ruang_kelas' => 'required|exists:ruangan,id', // Validasi ruang kelas yang ada
            'tanggal_peminjaman' => 'required|date',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_berakhir' => 'required|date_format:H:i|after:waktu_mulai', // pastikan waktu berakhir setelah waktu mulai
        ]);

        // Update data peminjaman
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($validated);

        // Update status ruang kelas menjadi 'terpinjam'
        $ruangan = Ruangan::find($request->ruang_kelas);
        $ruangan->status = 'terpinjam';
        $ruangan->save();

        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil diperbarui.');
    }

    // Menghapus data peminjaman
    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        // Ambil ruang yang dipinjam dan set statusnya menjadi 'tersedia'
        $ruangan = Ruangan::find($peminjaman->ruang_kelas);
        $ruangan->status = 'tersedia'; // Kembalikan status menjadi 'tersedia'
        $ruangan->save();

        // Hapus peminjaman
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil dihapus.');
    }
}
