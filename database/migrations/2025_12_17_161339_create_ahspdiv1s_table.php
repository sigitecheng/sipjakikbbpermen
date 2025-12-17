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
        Schema::create('ahspdiv1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('divpaketpekerjaan_id')->nullable();
            $table->foreignId('divpekerjaan_id')->nullable();
            $table->foreignId('divuraianpekerjaan_id')->nullable();
            $table->string('namapekerjaan')->nullable();
            $table->string('satuan')->nullable();
            $table->string('hargasatuan')->nullable();
            $table->string('keterangan1')->nullable();
            $table->string('keterangan2')->nullable();
            $table->string('cadangan1')->nullable();
            $table->string('cadangan2')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ahspdiv1s');
    }
};
