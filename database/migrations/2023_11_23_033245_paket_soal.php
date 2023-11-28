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
        Schema::create('paketSoal', function (Blueprint $table) {
            $table->id();
            $table->string('mapel');
            $table->string('Kelas');
            $table->string('jurusan');
            $table->string('waktu');
            $table->string('bobotNilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paketSoal');
    }
};
