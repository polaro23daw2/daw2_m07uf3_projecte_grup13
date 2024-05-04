<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloga extends Model
{
    protected $table = 'lloga';
    protected $primaryKey = ['dni_client', 'codi_unic'];
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'dni_client','codi_unic','data_inici_lloguer','hora_inici_lloguer','data_finalitzacio_lloguer','hora_finalitzacio_lloguer','lloc_lliurament_claus',
        'lloc_devolucio_claus','preu_per_dia','diposit','quantitat_diposit','tipus_asseguranca',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'dni_client', 'dni_client');
    }

    public function apartament()
    {
        return $this->belongsTo(Apartament::class, 'codi_unic', 'codi_unic');
    }

}
