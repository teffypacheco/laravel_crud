<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';

    public $timestamps = false;

    protected $fillable = ['id', 'documento', 'tipoDocumento', 'nombres', 'apellidos',
        'direccion', 'telefono', 'genero', 'fechaNacimeinto', 'estadoCivil'];

}
