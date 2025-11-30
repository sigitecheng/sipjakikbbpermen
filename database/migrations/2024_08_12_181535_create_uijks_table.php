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
        Schema::create('uijks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan')->nullable();
            $table->string('kategori_perusahaan')->nullable();
            $table->string('klasifikasi_bidang_usaha')->nullable();
            $table->string('sub_klasifikasi_bidang_usaha')->nullable();
            $table->string('keterangan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uijks');
    }
};
