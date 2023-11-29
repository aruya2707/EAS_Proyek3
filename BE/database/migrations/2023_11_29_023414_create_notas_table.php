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
        Schema::create('notas', function (Blueprint $table) {
            $table->bigIncrements('KodeNota');
            $table->unsignedBigInteger('KodeTenan');
            $table->unsignedBigInteger('KodeKasir');

            $table->date('TglNota');
            $table->time('JamNota');
            $table->decimal('JumlahBelanja', 10, 2);
            $table->decimal('Diskon', 5, 2);
            $table->integer('Total');
            $table->timestamps();

            $table->foreign('KodeTenan')->references('KodeTenan')->on('tenans');
            $table->foreign('KodeKasir')->references('KodeKasir')->on('kasirs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
