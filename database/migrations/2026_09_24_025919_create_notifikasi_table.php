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
           $table->integer('id_notifikasi')->autoIncrement();
            $table->integer('id_user');
            $table->integer('id_laporan');
            $table->string('pesan', 255);
            $table->enum('status', ['belum_dibaca', 'sudah_dibaca'])->default('belum_dibaca');
            $table->date('tanggal');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('id_user')->references('id_user')->on('pengguna')->onDelete('cascade');
            $table->foreign('id_laporan')->references('id_laporan')->on('laporan')->onDelete('cascade');
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
