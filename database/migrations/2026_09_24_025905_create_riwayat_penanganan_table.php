<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Lewati kalau tabel sudah ada
        if (Schema::hasTable('riwayat_penanganan')) {
            return;
        }

        Schema::create('riwayat_penanganan', function (Blueprint $table) {
            $table->id('id_penanganan');
            $table->unsignedBigInteger('id_laporan');   // sama dengan laporan.id (bigint unsigned)
            $table->integer('id_admin');                // sama dengan pengguna.id_user (int)
            $table->text('tindakan');
            $table->text('keterangan')->nullable();
            $table->date('tanggal');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('id_laporan')->references('id')->on('laporan')->onDelete('cascade');
            $table->foreign('id_admin')->references('id_user')->on('pengguna')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_penanganan');
    }
};