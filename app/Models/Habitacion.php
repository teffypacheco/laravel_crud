<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = 'habitacion';

    public $timestamps = false;

    protected $fillable = ['id', 'numeroHabitacion', 'descripcion'];

}
