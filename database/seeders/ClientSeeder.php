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
                'nom_i_cognoms' => 'Jedi" Martí',
                'edat' => 40,
                'telefon' => '931234567',
                'adreca' => 'Carrer Falsa 123, Death Star',
                'ciutat' => 'Coruscant',
                'pais' => 'Galàxia',
                'email' => 'jedi.joan@example.com',
                'tipus_de_targeta' => 'Dèbit',
                'numero_de_la_targeta' => '1234567890123456',
            ],
            [
                'dni_client' => '91011121f',
                'nom_i_cognoms' => 'Sith" Lopez',
                'edat' => 66,
                'telefon' => '932345678',
                'adreca' => 'Avinguda Veritat 456, Tatooine',
                'ciutat' => 'Mos Eisley',
                'pais' => 'Galàxia',
                'email' => 'sith.maria@example.com',
                'tipus_de_targeta' => 'Crèdit',
                'numero_de_la_targeta' => '6543210987654321',
            ]
            
        ];
        DB::table('clients')->insert($llista_Clients);
    }
}
