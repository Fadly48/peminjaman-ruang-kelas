<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('peminjaman', function (Blueprint $table) {
        $table->id();
        $table->string('nama_peminjam');
        $table->string('ruang_kelas');
        $table->date('tanggal_peminjaman');
        $table->time('waktu_mulai');
        $table->time('waktu_berakhir');
        $table->string('status')->default('pending');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
