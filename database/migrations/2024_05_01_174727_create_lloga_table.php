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
            $table->string('dni_client');
            $table->string('codi_unic');
            $table->date('data_inici');
            $table->time('hora_inici');
            $table->date('data_finalitzacio');
            $table->time('hora_finalitzacio');
            $table->string('lloc_lliurament_claus');
            $table->string('lloc_devolucio_claus');
            $table->decimal('preu_per_dia', 8, 2);
            $table->boolean('diposit');
            $table->decimal('quantitat_diposit', 8, 2)->nullable();
            $table->string('tipus_asseguranca');
            $table->primary(['dni_client', 'codi_unic']); // Composite primary key
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
