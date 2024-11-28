<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
{
    return view('peminjaman.create');
}


    public function store(Request $request)
    {
        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Cari peminjaman berdasarkan ID
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('peminjaman'));
    }


    public function update(Request $request, $id)
{
   
    $validated = $request->validate([
        'nama_peminjam' => 'required',
        'ruang_kelas' => 'required',
        'tanggal_peminjaman' => 'required',
        'waktu_mulai' => 'required',
        'waktu_berakhir' => 'required',
    ]);
    $peminjaman = Peminjaman::findOrFail($id);
    $peminjaman->update($validated);
    return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil diupdate');
}
public function destroy($id)
{
    $peminjaman = Peminjaman::findOrFail($id);
    $peminjaman->delete();

    return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus!');
}


}
