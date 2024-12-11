<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    // Menampilkan daftar ruangan
    public function index()
    {
        $ruangan = Ruangan::all(); // Ambil semua data ruangan
        return view('ruangan.index', compact('ruangan')); // Pastikan nama viewnya 'ruangan.index'
    }

    // Menampilkan form untuk menambah ruangan
    public function create()
    {
        return view('ruangan.create'); // Pastikan file viewnya ada di resources/views/ruangan/create.blade.php
    }

    // Menyimpan data ruangan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'kapasitas' => 'nullable|integer|min:0',
        ]);

        // Menyimpan data ruangan
        Ruangan::create($request->all());

        // Redirect ke daftar ruangan setelah berhasil
        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit data ruangan
    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id); // Menemukan ruangan berdasarkan ID
        return view('ruangan.edit', compact('ruangan')); // Pastikan file viewnya ada di resources/views/ruangan/edit.blade.php
    }

    // Memperbarui data ruangan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'kapasitas' => 'nullable|integer|min:0',
        ]);

        $ruangan = Ruangan::findOrFail($id); // Menemukan ruangan berdasarkan ID
        $ruangan->update($request->all()); // Mengupdate data ruangan

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil diupdate.');
    }

    // Menghapus data ruangan
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id); // Menemukan ruangan berdasarkan ID
        $ruangan->delete(); // Menghapus data ruangan

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil dihapus.');
    }
}