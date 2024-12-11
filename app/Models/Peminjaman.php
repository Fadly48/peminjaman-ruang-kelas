<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman'; // Nama tabel di database

    protected $fillable = [
        'nama_peminjam', 'ruang_kelas', 'tanggal_peminjaman', 'waktu_mulai', 'waktu_berakhir', 'status',
    ];
}