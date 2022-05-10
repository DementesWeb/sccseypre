<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CableOnda extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'nombre',
        'telefono_casa',
        'telefono_oficina',
        'celular',
        'fax',
        'email',
        'direccion_postal',
        'direccion',
        'telefono_residencia_cable',
        'telefono_oficina_cable',
        'telefono_celular_cable',
        'direccion_postal_cable',
        'fax_cable',
        'direccion_fisica',
        'telefono_contacto'
    ];
}
