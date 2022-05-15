<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    protected $fillable = [
        'CED',
        'PRIMER_NOMBRE',
        'SEGUNDO_NOMBRE',
        'APELLIDO_PATERNO',
        'APELLIDO_MATERNO',
        'APELLIDO_CASADA',
        'TEL1',
        'TEL2',
        'TEL3',
        'TEL4',
        'TEL5',
        'TEL6',
        'TEL7',
        'TEL8',
        'TEL9',
        'TEL10',
        'TEL11',
        'TEL12',
        'TEL13',
        'TEL14',
        'TEL15'
    ];
}
