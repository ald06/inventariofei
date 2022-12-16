<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
  #protected $table='mantenimientos';
  protected $primaryKey = 'id';
  protected $fillable = [
    'nserie',
    'dispositivo',
    'diagnostico',
    'estatus',
    'justificacion',
    'observaciones',
    'fecha',
      ];
}
