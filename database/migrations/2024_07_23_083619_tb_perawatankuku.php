<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('tb_perawatankuku', function (Blueprint $table) {
            $table->id(); // Kolom id untuk primary key
            $table->string('nama', 50); // Kolom nama dengan VARCHAR(50)
            $table->string('alamat', 50); // Kolom alamat dengan VARCHAR(50)
            $table->string('tanggal_konsultasi', 50); // Kolom tanggal konsultasi dengan VARCHAR(50)
            $table->string('perawatan_rutin', 50); // Kolom perawatan rutin dengan VARCHAR(50) (default 'Tidak')
            $table->string('perawatan_sebelumnya', 50); // Kolom perawatan terakhir dengan VARCHAR(50) yang bisa null
            $table->string('saran_perawatan', 50); // Kolom saran perawatan dengan VARCHAR(50) yang bisa null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_perawatankuku');
    }
};
