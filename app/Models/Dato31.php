<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato31 extends Model
{
    use HasFactory;

    protected $fillable =[
        'N_TEL',
        'CEDULA',
        'PRIMER_NOMBRE',
        'TEL',
    ];


}
