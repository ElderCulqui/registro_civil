<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registro';

    protected $fillable = [
        'nombre1',
        'dni1',
        'domicilio1',
        'telefono1',
        'parentesco1',
        'primer_apellido_titular',
        'segundo_apellido_titular',
        'prenombres_titular',
        'sexo_titular',
        'lugar_titular',
        'hora_titular',
        'hospital_titular',
        'apellidos_padre',
        'prenombres_padre',
        'dni_padre',
        'nacionalidad_padre',
        'apellidos_madre',
        'prenombres_madre',
        'dni_madre',
        'nacionalidad_madre'
    ];
}
