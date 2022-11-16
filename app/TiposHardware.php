<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposHardware extends Model
{
    protected $primaryKey = 'id';
    protected $fillable =[
        'nomHardware',
    ];
}
