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
            Schema::create('sertifikasiagenda', function (Blueprint $table) {
                $table->id();
                $table->foreignId('pengawasanlokasi_id')->nullable();
                $table->foreignId('user_id')->nullable();
                $table->foreignId('agendastatus_id')->nullable();
                $table->text('nama_agenda')->nullable();
                $table->text('keterangan')->nullable();
                $table->integer('kuota')->nullable();
                $table->date('tanggal_mulai')->nullable();
                $table->date('tanggal_selesai')->nullable();
                $table->softDeletes();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikasiagendas');
    }
};
