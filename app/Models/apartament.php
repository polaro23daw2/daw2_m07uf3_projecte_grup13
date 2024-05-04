<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartament extends Model
{
    protected $table = 'apartament';
    protected $primaryKey = 'codi_unic';
    public $incrementing = false;
    protected $fillable = 
    [
        'codi_unic','referencia_catastral','ciutat','barri','nom_del_carrer','numero_del_carrer','pis',
        'nombre_de_llits','nombre_dhabitacions','ascensor','calefaccio','aire_condicionat',
    ];
    protected $casts = [
        'ascensor' => 'boolean',
        'aire_condicionat' => 'boolean',
    ];
}
