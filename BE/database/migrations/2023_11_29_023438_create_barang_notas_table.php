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
        Schema::create('barangnotas', function (Blueprint $table) {
            $table->id();
            $table->string('KodeNota');
            $table->string('KodeBarang');
            $table->integer('JumlahBarang');
            $table->string('HargaSatuan'); 
            $table->integer('Jumlah');
            $table->timestamps();

            $table->foreign('KodeNota')->references('KodeNota')->on('notas');
            $table->foreign('KodeBarang')->references('KodeBarang')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_notas');
    }
};
