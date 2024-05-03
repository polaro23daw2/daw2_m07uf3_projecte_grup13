<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'dni_client';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'dni_client', 'nom_i_cognoms', 'edat', 'telefon', 'adreca', 'ciutat', 'pais', 'email', 'tipus_de_targeta', 'numero_de_la_targeta'
    ];
}
