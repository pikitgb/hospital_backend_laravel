<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doctor;
//use Carbon\Carbon;

class DoctorsController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }


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
    return view('doctors.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
    //$params = $request->all();
    // Parameters to create the picture
    $image = $request->file('picture');
    if (isset($image)) {
      $imageName = $image->getClientOriginalName();
      $image->move(base_path(). '/public/images/catalog/', $imageName);

      // Creating the doctor
      $doctor = new Doctor;
      $doctor->name = $request->get('name');
      $doctor->lastname= $request->get('lastname');
      $doctor->speciality= $request->get('speciality');
      $doctor->experience_years_count= $request->get('experience_years_count');
      $doctor->age = $request->get('age');
      $doctor->picture = $imageName;

      $doctor->save();

      // Redirecting to the doctor page
      if ($doctor->save())
        return redirect("doctors/".$doctor->id)->withSuccess("Doctor successfully created!");
      else
        return redirect()->back()->with('errors', "Error. Doctor can not be created.");
    }
    return redirect()->back()->with('errors', "Error with parameters");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $doctor = Doctor::findOrFail($id);
    // return view('doctors.show', ['doctor' => $doctor]);
    return view('doctors.show')->withDoctor($doctor);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $doctor = Doctor::findOrFail($id);
    return view('doctors.edit', ['doctor' => $doctor]);
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
    $doctor = Doctor::find($id);
    $doctor->update($request->all());
    return redirect('doctors/'.$doctor->id);
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
