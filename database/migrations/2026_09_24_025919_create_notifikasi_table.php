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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id('id_notifikasi');
            
            // PERBAIKAN: Diubah menjadi integer biasa agar sama persis dengan tabel pengguna
            $table->integer('id_user');      
            
            // Asumsi tabel laporan menggunakan $table->id() yang merupakan BigInteger
            $table->unsignedBigInteger('id_laporan');   

            $table->string('pesan', 255);
            $table->enum('status', ['belum_dibaca', 'sudah_dibaca'])->default('belum_dibaca');
            $table->date('tanggal');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('id_user')->references('id_user')->on('pengguna')->onDelete('cascade');
            $table->foreign('id_laporan')->references('id')->on('laporan')->onDelete('cascade');

            // Mempercepat hitung notifikasi belum dibaca di dashboard
            $table->index(['id_user', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi');
    }
};