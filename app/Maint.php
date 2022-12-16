<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maint extends Model
{
  protected $table='maints';
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
