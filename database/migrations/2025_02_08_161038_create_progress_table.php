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
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('kelas')->nullable();
            $table->string('target_anggota')->nullable();
            $table->string('progress_anggota')->nullable();
            $table->string('ketepatan_waktu')->nullable();
            $table->string('kecepatan_pengerjaan')->nullable();
            $table->string('kesesuaian_timeline')->nullable();
            $table->string('kualitas_dokumen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
