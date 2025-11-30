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
        Schema::create('tukangterampils', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->foreignId('pengawasanlokasi_id')->nullable();
            $table->foreignId('keterampilanpekerja_id')->nullable();
            $table->foreignId('tahunpilihan_id')->nullable();
            $table->string('desa')->nullable();
            $table->string('alamat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nik')->nullable();
            $table->string('kualifikasi')->nullable();
            $table->string('registrasi')->nullable();
            // ------------------------------------------
            $table->string('foto')->nullable();
            $table->string('kta_gatensi')->nullable();
            $table->string('skk_pekerja')->nullable();
            $table->string('foto_kegiatanpekerja1')->nullable();
            $table->string('foto_kegiatanpekerja2')->nullable();
            // $table->integer('usia');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tukangterampils');
    }
};
