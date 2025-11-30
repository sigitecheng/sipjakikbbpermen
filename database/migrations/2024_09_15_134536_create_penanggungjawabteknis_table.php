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
        Schema::create('penanggungjawabteknis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengawasanlokasi_id')->nullable(); // Tempat
            $table->string('nama_lengkap')->nullable(); // Nama lengkap
            $table->bigInteger('nopjt')->nullable(); // Nomor PJT, unique untuk memastikan tidak ada duplikat
            $table->string('foto_pjt')->nullable(); // Nomor PJT, unique untuk memastikan tidak ada duplikat
            $table->text('sfesifikasi')->nullable(); // Spesifikasi, perhatikan bahwa nama kolom ini adalah 'sfesifikasi', pastikan sesuai dengan yang diinginkan
            $table->date('tanggal_terbit')->nullable(); // Tanggal terbit
            $table->date('masa_berlaku')->nullable(); // Masa berlaku
            $table->softDeletes(); // Kolom untuk soft deletes
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penanggungjawabteknis');
    }
};
