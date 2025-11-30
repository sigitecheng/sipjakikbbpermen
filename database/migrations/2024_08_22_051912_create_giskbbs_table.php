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
        Schema::create('giskbbs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kecamatan')->nullable();
            $table->string('gambar')->nullable();
            $table->string('laki_laki')->nullable();
            $table->string('perempuan')->nullable();
            $table->string('total_penduduk')->nullable();
            // $table->string('gambar');
            $table->text('keterangan_gis')->nullable();
            // $table->date('tanggal');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giskbbs');
    }
};
