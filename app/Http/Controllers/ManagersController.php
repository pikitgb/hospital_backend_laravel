<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Manager;

class ManagersController extends Controller
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
    //Manager::create(['name' => "Juan Ricardo", 'lastname' => "Gutierrez",
    //'latitude'=> '120.0333', 'longitude' => '29.222202',
    //'age'=> 33, 'experience_years_count' => 12, 'picture' => 'img/manager.png',
    //'attented_cases_number' => 369,  'current_room_number' => 65,
    //'last_message_received' => "manager Juan, go inmediatly to the Emergency room",
    //'last_time_reported' => "2015-08-29 10:10:10", 'attended_patients_counter_today'=> 12
    //]);
    $managers = Manager::all();
    return view('managers.index', ['managers' => $managers]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('managers.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
    $manager = Manager::create($request->all());
    return redirect("managers/".$manager->id)->withSuccess("manager successfully created!");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $manager = manager::findOrFail($id);
    // return view('managers.show', ['manager' => $manager]);
    return view('managers.show')->withManager($manager);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $manager = manager::findOrFail($id);
    return view('managers.edit', ['manager' => $manager]);
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
    $manager = manager::find($id);
    $manager->update($request->all());
    return redirect('managers/'.$manager->id);
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
