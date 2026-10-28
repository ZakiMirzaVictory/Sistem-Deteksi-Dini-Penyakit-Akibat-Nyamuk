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
    Schema::create('laporans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke pelapor (opsional jika sistem harus login)
        $table->string('lokasi');
        $table->string('jenis_penyakit');
        $table->text('gejala');
        $table->text('kondisi_lingkungan');
        $table->string('foto')->nullable(); // Foto opsional
        $table->string('status')->default('menunggu'); // Status default: menunggu, terverifikasi, ditolak
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
