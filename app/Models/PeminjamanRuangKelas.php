<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanRuangKelas extends Model
{
    use HasFactory;

    protected $table = 'peminjaman_ruang_kelas';
    protected $fillable = [
        'nama_peminjam',
        'ruang_kelas',
        'tanggal_peminjaman',
        'waktu_mulai',
        'waktu_berakhir',
        'status'
    ];
}
