<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanRuangKelas;
use Illuminate\Http\Request;


class PeminjamanRuangKelasController
{
    public function index()
    {
        // Menampilkan semua data peminjaman ruang kelas
        $peminjaman = PeminjamanRuangKelas::all();
        return view('dashboard.peminjaman', compact('peminjaman'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        PeminjamanRuangKelas::create($request->all());
        return redirect()->route('peminjaman.index');
    }

    public function edit($id)
{
    $peminjaman = PeminjamanRuangKelas::findOrFail($id);
    return view('peminjaman.edit', compact('peminjaman'));
}

}
