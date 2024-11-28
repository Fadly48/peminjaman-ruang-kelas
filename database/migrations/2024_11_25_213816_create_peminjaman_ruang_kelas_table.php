<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanRuangKelasTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman_ruang_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('ruang_kelas');
            $table->date('tanggal_peminjaman');
            $table->time('waktu_mulai');
            $table->time('waktu_berakhir');
            $table->enum('status', ['pending', 'disetujui', 'selesai'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman_ruang_kelas');
    }
}
