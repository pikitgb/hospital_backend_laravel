<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Manager;

class HomeController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function dashboard()
  {
    $doctor_1 = Doctor::all()->first();
    $doctor_2 = Doctor::all()->last();
    return view('home.dashboard',
      [
        'doctors_counter' => Doctor::count(),
        'managers_counter' => Manager::count(),
        'doctor_1' => $doctor_1,
        'doctor_2' => $doctor_2,
      ]
    );
  }

}
