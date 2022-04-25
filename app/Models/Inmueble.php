<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_inmueble','direccion','numero_habitacion','numero_bano','numero_area','precio','codigo','foto','estatus'
    ];
}
