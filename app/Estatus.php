<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estatus extends Model
{
use softDeletes;

protected $primaryKey = 'id';
protected $fillable = [
 'tipoEstatus',
];
protected $dates = ['deleted_at'];


}
