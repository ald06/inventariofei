<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Software extends Model
{
  use SoftDeletes;

protected $primaryKey = 'id';
protected $fillable = [
  'nombre',
  'version',
  'descripcion',
  'tipoSoftware',
  'licencia',
  'disponibilidad',
  'equiposPermitidos',
  'equiposOcupados',
  'bien_id',
];
protected $dates = ['deleted_at'];

public function bien() {
      return $this->hasOne('App\Bien','id','bien_id');
  }


}
