<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appmanagement extends Model
{
    protected $fillable = [
    'appid',
    'sender_id',
    'reciver_id',
    'acomment',
    'atime',
    'adate',
    'appstatus',
];

protected $table = 'appmanagement';
}
