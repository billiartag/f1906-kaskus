<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    protected $primaryKey = 'username';
    protected $keyType = 'string';
    public $timestamps = FALSE;
}
