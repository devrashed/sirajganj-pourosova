<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    protected $fillable = [
    'apid',
    'author',
    'details',
    'plot',
    'idate',    
    'itime',
];

protected $table = 'invest';
}
