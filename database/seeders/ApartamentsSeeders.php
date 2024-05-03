<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartamentsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $llista_apartament = [
            [
                'codi_unic' => 'A000001',
                'referencia_catastral' => '12345ABC',
                'ciutat' => 'Barcelona',
                'barri' => 'Gràcia',
                'nom_del_carrer' => 'Diagonal',
                'numero_del_carrer' => 123,
                'pis' => 3,
                'nombre_de_llits' => 2,
                'nombre_dhabitacions' => 2,
                'ascensor' => true,
                'calefaccio' => 'Gas Natural',
                'aire_condicionat' => true,
            ],
            [
                'codi_unic' => 'A000002',
                'referencia_catastral' => '67890XYZ',
                'ciutat' => 'Madrid',
                'barri' => 'Sol',
                'nom_del_carrer' => 'Mayor',
                'numero_del_carrer' => 47,
                'pis' => 5,
                'nombre_de_llits' => 3,
                'nombre_dhabitacions' => 3,
                'ascensor' => true,
                'calefaccio' => 'Elèctrica',
                'aire_condicionat' => false,
            ]
            ];
        DB::table('apartament')->insert($llista_apartament);
    }
}
