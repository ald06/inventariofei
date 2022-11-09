<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Responsable extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = [
    'matricula',
    'nombre',
    'rol',
  ];
  protected $dates = ['deleted_at'];

}
