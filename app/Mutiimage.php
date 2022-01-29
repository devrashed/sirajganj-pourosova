<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutiimage extends Model
{
    protected $fillable = [    
    'name',
    'mimage',
    'position',
];

protected $table = 'mutiimage';
}
