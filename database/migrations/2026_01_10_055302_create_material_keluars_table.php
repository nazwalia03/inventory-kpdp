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
        Schema::create('material_keluars', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_keluar');
            $table->foreignId('material_id')->constrained('materials')->onDelete('cascade');
            $table->integer('jumlah_keluar');
            $table->string('tujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_keluars');
    }
};
