<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finalsub extends Model
{
    protected $fillable = [
    'fappid',
    'mayorid',
    'maysub',
    'fstatus',
    'fcdate',
    'fctime',
];

protected $table = 'finalsub';
}
