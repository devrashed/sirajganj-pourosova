<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $fillable = [
    'amount',
    'tland',
    'totalvat',
    'totalaykor',
    'cappid',   
    'cdate',
    'image',
 ];

protected $table = 'cash';
}
