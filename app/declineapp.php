<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Declineapp extends Model
{
    protected $fillable = [
    'apid',
    'message',
    'ctime',
    'cdate',
];

protected $table = 'declineapp';
}
