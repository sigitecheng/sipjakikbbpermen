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
        Schema::create('informasirantaipasoks', function (Blueprint $table) {
            $table->id();
            // Informasi dasar perusahaan
    $table->foreignId('kecamatankbb_id')->nullable();
    $table->foreignId('user_id')->nullable();
    $table->string('namaperusahaan')->nullable();
    $table->string('tahunberdiri')->nullable();
    // Identitas legal
    $table->string('nib')->nullable();
    $table->string('npwp')->nullable();
        // Kontak & Alamat
    $table->string('telepon')->nullable();
    $table->string('email')->nullable();
    $table->string('website')->nullable();
    $table->text('alamatlengkap')->nullable();
    // Pimpinan / Penanggung Jawab
    $table->string('namapimpinan')->nullable();
    $table->string('jabatan')->nullable(); // Direktur Utama, dll
    // Deskripsi atau profile singkat
    $table->text('keteranganperusahaan')->nullable();

    $table->text('cadangan1')->nullable();
    $table->text('cadangan2')->nullable();
    $table->text('cadangan3')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasirantaipasoks');
    }
};
