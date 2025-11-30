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
        Schema::create('qas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qasebagai_id')->nullable();
            $table->foreignId('qapertanyaan_id')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('email')->nullable();
            $table->text('telepon')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qas');
    }
};
