<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato9 extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOMBRE',
        'PROVINCIA',
        'DISTRITO',
    	'CORREGIMIENTO',
        'BARRIO',
        'DIRECCION',
        'TELEFONO FIJO',
        'CELULAR',
        'CORREO',
        'ACTI_COMERCIAL',
        'TIPO DOC',
        'CEDULA',
        'SECTOR',
        'CALLE',
        'NRO_CASA',
        'CONDOMINIO',
        'EDIFICIO',
        'PISO',
        'APTO',
    ];
}
