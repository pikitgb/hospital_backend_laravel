<?php

namespace App;

use Jenssegers\Mongodb\Model as Eloquent;


class Manager extends Eloquent
{
    protected $fillable = ['username', 'password'];
}
