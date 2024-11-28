<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    public function daftar()
    {
        $ruangan = Ruangan::all();
        return view('ruangan.daftar', compact('ruangan'));
    }

    public function create()
    {
        return view('ruangan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'kapasitas' => 'nullable|integer|min:0',
        ]);

        Ruangan::create($request->all());

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('ruangan.edit', compact('ruangan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'kapasitas' => 'nullable|integer|min:0',
        ]);

        $ruangan = Ruangan::findOrFail($id);
        $ruangan->update($request->all());

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil dihapus.');
    }
}

