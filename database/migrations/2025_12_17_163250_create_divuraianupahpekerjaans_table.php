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
        Schema::create('divuraianupahpekerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ahspdiv1_id')->nullable();
            $table->foreignId('satuanhargaupahtenagakerja_id')->nullable();
            $table->string('uraian')->nullable();
            $table->string('kode')->nullable();
            $table->string('satuan')->nullable();
            $table->string('koefisien')->nullable();
            $table->string('hargasatuan')->nullable();
            $table->string('jumlahharga')->nullable();
            $table->string('keterangan1')->nullable();
            $table->string('keterangan2')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divuraianupahpekerjaans');
    }
};
