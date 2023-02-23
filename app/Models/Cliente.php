<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected fillable = [
            'empresa',
            'numeroFiscal',
            'documentoIdentidad',
           'razonSocial',
           'razonSocial',
           'nombres',
           'apellidos',
           'direccion',
           'ciudad',
           'departamento',
           'telefono',
           'geolocation',
           'email'
    ];
}
