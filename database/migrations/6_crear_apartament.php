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
        Schema::create('apartament', function (Blueprint $table) {
            $table->string('codi_unic', 7)->primary();
            $table->string('referencia_catastral');
            $table->string('ciutat');
            $table->string('barri');
            $table->string('nom_del_carrer');
            $table->integer('numero_del_carrer');
            $table->integer('pis');
            $table->integer('nombre_de_llits');
            $table->integer('nombre_dhabitacions');
            $table->boolean('ascensor');
            $table->enum('calefaccio', ['Elèctrica', 'Gas Natural', 'Butà']);
            $table->boolean('aire_condicionat');
            $table->timestamps();
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
