<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Manager;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('home.dashboard', ['doctors_counter' => Doctor::count(), 'managers_counter' => Manager::count()]);
    }

}
