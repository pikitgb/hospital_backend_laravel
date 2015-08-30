<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Model as Eloquent;

class Doctor extends Eloquent
{
  protected $fillable = ['name', 'latitude', 'longitude',
    'lastname', 'age', 'experience_years_count', 'picture',
    'attented_cases_number', 'current_room_number',
    'last_message_received', 'last_time_reported', 'attended_patients_counter_today', 'speciality',
  ];
}
