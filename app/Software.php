<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
protected $primaryKey = 'id';
protected $fillable = [
  'marca',
  'modelo',
  'tipo',
  'caracteristicas',
  'observaciones',
  'bien_id',
];
protected $dates = ['deleted_at'];

public function bien() {
      return $this->hasOne('App\Bien','id','bien_id');
  }


}
