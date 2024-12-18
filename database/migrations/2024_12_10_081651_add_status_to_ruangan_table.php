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
        Schema::table('ruangan', function (Blueprint $table) {
            $table->string('status')->default('tersedia');  // Menambahkan kolom 'status' dengan nilai default 'tersedia'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ruangan', function (Blueprint $table) {
            $table->dropColumn('status');  // Menghapus kolom 'status'
        });
    }
};