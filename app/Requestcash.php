<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestcash extends Model
{
    protected $fillable = [
    'rappid',
    'sendsms',
 ];

protected $table = 'requestcash';
}
