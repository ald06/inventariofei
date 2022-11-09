<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ubicacion extends Model
{
    use softDeletes;

    protected $primaryKey = 'id';
    protected $fillable = [
     'edificio',
     'aula',
    ];
    protected $dates = ['deleted_at'];
}
