<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doctor;
//use Carbon\Carbon;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      //Doctor::create(['name' => "Juan Ricardo", 'lastname' => "Gutierrez",
        //'latitude'=> '120.0333', 'longitude' => '29.222202',
        //'age'=> 33, 'experience_years_count' => 12, 'picture' => 'img/doctor.png',
        //'attented_cases_number' => 369,  'current_room_number' => 65,
        //'last_message_received' => "Doctor Juan, go inmediatly to the Emergency room",
        //'last_time_reported' => "2015-08-29 10:10:10", 'attended_patients_counter_today'=> 12
      //]);
      $doctors = Doctor::all();
      return view('doctors.index', ['doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $doctor = Doctor::find($id);
      return view('doctors.show', ['doctor' => $doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
