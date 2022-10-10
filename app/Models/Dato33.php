<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato33 extends Model
{
    use HasFactory;

    protected $fillable =[
        'NOMBRE',
        'CEDULA',
        'CARGO',
        'SALARIO',
        'CONDICION',
    ];

}
