<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Model as Eloquent;

class Doctor extends Eloquent
{
  protected $fillable = ['name', 'latitude', 'longitude', 'lastname'];
}
