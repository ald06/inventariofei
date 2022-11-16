<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bien extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = [
    'noserie',
    'noinventario',     
  ];
protected $dates = ['deleted_at'];
}
