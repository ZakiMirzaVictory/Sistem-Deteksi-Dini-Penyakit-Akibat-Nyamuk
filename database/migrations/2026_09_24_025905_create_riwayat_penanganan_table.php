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
        Schema::create('riwayat_penanganan', function (Blueprint $table) {
           $table->integer('id_penanganan')->autoIncrement();
            $table->integer('id_laporan');
            $table->integer('id_admin');
            $table->text('tindakan');
            $table->text('keterangan')->nullable();
            $table->date('tanggal');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('id_laporan')->references('id_laporan')->on('laporan')->onDelete('cascade');
            $table->foreign('id_admin')->references('id_user')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_penanganan');
    }
};
