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
        Schema::create('apartaments', function (Blueprint $table) {
            $table->string('codi_unic', 7)->primary();
            $table->string('referencia_catastral');
            $table->string('ciutat');
            $table->string('barri');
            $table->string('nom_carrer');
            $table->integer('numero_carrer');
            $table->string('pis')->nullable();
            $table->integer('nombre_llits');
            $table->integer('nombre_habitacions');
            $table->boolean('ascensor');
            $table->string('calefaccio');
            $table->boolean('aire_condicionat');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartament');
    }
};
