<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruangan;

class RuanganSeeder extends Seeder
{
    public function run()
    {
        // Membuat 10 ruangan kelas
        for ($i = 1; $i <= 10; $i++) {
            Ruangan::create([
                'nama_ruangan' => 'Ruang Kelas ' . str_pad($i, 3, '0', STR_PAD_LEFT),
            ]);
        }

        // Menambahkan ruang lab
        $labs = ['Lab Komputer', 'Lab Biologi', 'Lab Kimia', 'Lab Fisika'];
        foreach ($labs as $lab) {
            Ruangan::create([
                'nama_ruangan' => $lab,
            ]);
        }

        // Menambahkan lapangan
        $fields = ['Lapangan Sepak Bola', 'Lapangan Basket', 'Lapangan Voli'];
        foreach ($fields as $field) {
            Ruangan::create([
                'nama_ruangan' => $field,
            ]);
        }
    }
}