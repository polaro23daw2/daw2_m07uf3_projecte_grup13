<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TreballadorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('treballadors')->insert([
            [
                'nom' => 'Joan',
                'cognoms' => 'Garcia',
                'nif' => '12345678A',
                'data_naixement' => Carbon::parse('1985-06-15'),
                'sexe' => 'M',
                'adressa' => 'Carrer Major, 1',
                'tlf_fixe' => 934123456,
                'tlf_mobil' => 612345678,
                'email' => 'joan.garcia@example.com',
                'fotografia' => null,
                'treball_distancia' => false,
                'tipus_contracte' => 'indefinit',
                'data_contractacio' => Carbon::parse('2015-09-01'),
                'categoria' => 1,
                'nom_feina' => 'Developer',
                'sou' => 30000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'Anna',
                'cognoms' => 'Lopez',
                'nif' => '87654321B',
                'data_naixement' => Carbon::parse('1990-03-22'),
                'sexe' => 'F',
                'adressa' => 'Carrer Nou, 2',
                'tlf_fixe' => 934654321,
                'tlf_mobil' => 612345679,
                'email' => 'anna.lopez@example.com',
                'fotografia' => null,
                'treball_distancia' => true,
                'tipus_contracte' => 'temporal',
                'data_contractacio' => Carbon::parse('2020-02-01'),
                'categoria' => 2,
                'nom_feina' => 'Designer',
                'sou' => 25000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
