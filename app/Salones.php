<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Salones extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = [
    'dispositivo',
    'status',
    'lugar',
    'fecha',
    'responsable',
  ];
 // protected $dates = ['deleted_at'];

}
