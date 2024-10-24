<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioAdicional extends Model
{
    use HasFactory;

    protected $table = 'servicio_adicionals';

    protected $fillable = [
        'nombre',

    ];
}
