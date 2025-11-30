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
        Schema::create('artikeljakonmasjakis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('judul')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('foto1')->nullable(); // cadangan
            $table->string('foto2')->nullable(); // cadangan
            $table->string('foto3')->nullable(); // cadangan
            $table->string('berkas')->nullable();
            $table->text('keterangan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikeljakonmasjakis');
    }
};
