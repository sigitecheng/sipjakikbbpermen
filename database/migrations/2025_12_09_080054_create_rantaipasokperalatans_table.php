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
        Schema::create('rantaipasokperalatans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('informasirantaipasok_id')->nullable();
            $table->string('namamaterial')->nullable();
            $table->string('harga')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('ketersediaan')->nullable();
            $table->string('satuan')->nullable();
            $table->string('keterangan')->nullable();


            $table->string('cadangan1')->nullable();
            $table->string('cadangan2')->nullable();
            $table->string('cadangan3')->nullable();
            $table->string('cadangan4')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rantaipasokperalatans');
    }
};
