<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposAdquisicion extends Model
{
    protected $primaryKey = 'id';
    protected $fillable =[
        'nombre',
    ];
}
