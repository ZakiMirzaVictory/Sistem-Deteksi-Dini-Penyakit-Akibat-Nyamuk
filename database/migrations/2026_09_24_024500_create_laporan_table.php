<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Lewati kalau tabel sudah dibuat manual di database
        if (Schema::hasTable('laporan')) {
            return;
        }

        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');                 // sama dengan pengguna.id_user (int)
            $table->date('tanggal');
            $table->string('lokasi');
            $table->text('gejala');
            $table->text('deskripsi');
            $table->string('foto')->nullable();
            $table->string('status')->default('pending'); // pending, terverifikasi, ditolak
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('pengguna')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};