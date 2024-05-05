<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crear el usuario y la base de datos
        DB::statement("CREATE USER 'administrador'@'localhost' IDENTIFIED BY 'FjeClot24#';");
        DB::statement("CREATE DATABASE empresa;");
        DB::statement("GRANT ALL PRIVILEGES ON empresa.* TO 'administrador'@'localhost';");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revertir los cambios
        DB::statement("DROP DATABASE IF EXISTS empresa;");
        DB::statement("DROP USER 'administrador'@'localhost';");
    }
}
