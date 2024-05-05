<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $llista_usuaris = [
            [
                'name' => 'Yoda',
                'tipus' => 'cap_de_departament',
                'email' => 'm07admphp@gmail.com',
                'password' => Hash::make('fjeClot23#')
            ],
            [
                'name' => 'anakin',
                'tipus' => 'treballador',
                'email' => 'polsapir@gmail.com',
                'password' => Hash::make('clotFje24@')
            ],
        ];
        DB::table('users')->insert($llista_usuaris);
    }
}
