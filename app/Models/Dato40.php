<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato40 extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID',
        'CEDULA',
        'NOMBRE',
        'EMAIL',
        'TEL1',
        'TEL2',
    ];

}
