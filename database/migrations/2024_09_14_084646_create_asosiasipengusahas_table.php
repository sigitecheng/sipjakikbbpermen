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
        Schema::create('asosiasipengusahas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_asosiasi')->nullable(); // Nama Asosiasi
            $table->string('alamat_kantor')->nullable(); // Alamat Kantor
            $table->foreignId('pengawasanlokasi_id')->nullable(); // Kota
            $table->string('provinsi')->nullable(); // Provinsi
            $table->string('kontak')->nullable(); // Kontak
            $table->string('email')->nullable(); // Email
            $table->string('website')->nullable(); // Website
            $table->string('kepala_asosiasi')->nullable(); // Kepala Asosiasi
            $table->string('foto_asosiasi')->nullable(); // Kepala Asosiasi
            // $table->year('tanggal_berdiri'); // Tanggal Berdiri
            $table->integer('jumlah_anggota')->nullable(); // Jumlah Anggota
            $table->string('status')->nullable(); // Status
            $table->softDeletes(); // Status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asosiasipengusahas');
    }
};
