<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planapprove extends Model
{
    protected $fillable = [
    'plname',
    /*'pltype',*/
    'pltypename',
    'plvillage',
    'plfoor',
    'plaapplicantid',
    'pldate',
    'pltime',
];

protected $table = 'planapprove';
}
