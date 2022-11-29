<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicaciones extends Model
{
    protected $primaryKey = 'id';
    protected $fillable =[
        'edificio',
        'nomLugar',
        'descripcion',
    ];
}
