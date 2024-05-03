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
        Schema::create('lloga', function (Blueprint $table) {
            $table->string('dni_client', 20);
            $table->string('codi_unic', 7);
            $table->primary(['dni_client', 'codi_unic']);
            $table->date('data_inici_lloguer');
            $table->time('hora_inici_lloguer');
            $table->date('data_finalitzacio_lloguer');
            $table->time('hora_finalitzacio_lloguer');
            $table->string('lloc_lliurament_claus');
            $table->string('lloc_devolucio_claus');
            $table->decimal('preu_per_dia', 8, 2);
            $table->boolean('diposit');
            $table->decimal('quantitat_diposit', 8, 2);
            $table->enum('tipus_asseguranca', ['Franquícia fins a 1000 Euros', 'Franquícia fins 500 Euros', 'Sense franquícia']);
            $table->timestamps();

            $table->foreign('dni_client')->references('dni_client')->on('clients')->onDelete('cascade');
            $table->foreign('codi_unic')->references('codi_unic')->on('apartament')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lloga');
    }
};
