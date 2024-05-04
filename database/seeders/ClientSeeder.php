<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $llista_Clients = [
            [
                'dni_client' => '12345678t',
                'nom_i_cognoms' => 'Joan Martí',
                'edat' => 40,
                'telefon' => '931234567',
                'adreca' => 'Carrer Falsa 123',
                'ciutat' => 'Barcelona',
                'pais' => 'Espanya',
                'email' => 'joan.marti@example.com',
                'tipus_de_targeta' => 'Dèbit',
                'numero_de_la_targeta' => '1234567890123456'
            ],
            [
                'dni_client' => '91011121f',
                'nom_i_cognoms' => 'Maria Lopez',
                'edat' => 35,
                'telefon' => '932345678',
                'adreca' => 'Avinguda Veritat 456',
                'ciutat' => 'Madrid',
                'pais' => 'Espanya',
                'email' => 'maria.lopez@example.com',
                'tipus_de_targeta' => 'Crèdit',
                'numero_de_la_targeta' => '6543210987654321'
            ]
        ];
        DB::table('clients')->insert($llista_Clients);
    }
}
