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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('dni_client', 20)->primary();
            $table->string('nom_i_cognoms');
            $table->integer('edat');
            $table->string('telefon');
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('pais');
            $table->string('email');
            $table->enum('tipus_de_targeta', ['Dèbit', 'Crèdit']);
            $table->string('numero_de_la_targeta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
