<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bien extends Model
{
  use SoftDeletes;

  protected $primaryKey = 'id';
  protected $fillable = [
    'noserie',
    'noinventario',
    'responsable_id',
    'ubicacion_id',
    'estatus_id',
    'tipoadquisicion_id',
  ];

protected $dates = ['deleted_at'];

// public function bien() {
//         return $this->hasOne('App\Bien','id','bien_id');
//     }

public function adquisicion() {
         return $this->hasOne('App\tiposAdquisicion','id','tipoadquisicion_id');
     }


}
