@extends('layouts.master')

@section('presentation')


  <center>
  <div class="ui container center">
    <br />
    <br />
    <img src="{{ asset('img/background.png') }}" style="height: 300px;">
    <h1 class="ui inverted header" style="margin-top: 20px;">
      HospitalCity - Admin
    </h1>
    <h2>Welcome to the Demo App HospitalCity Administration</h2>
    <div class="ui huge primary button">Login<i class="right arrow icon"></i></div>
    <br />
    <br />
  </div>
  </center>
@stop

@section('content')
  <div style="background: white">
    <div class="ui vertical stripe segment">
      <div class="ui middle aligned stackable grid container">
        <div class="row">
          <div class="eight wide column">
            <h3 class="ui header">See the current GPS position for Doctors traveling in our city</h3>
            <p>DoctorTck show the GPS position for doctors using Google Maps and other technologies.</p>
            <h3 class="ui header">Notify to doctors</h3>
            <p>As a manager send messages and push notifications to the doctor Android App</p>
          </div>
          <div class="six wide right floated column">
            <img src="{{ asset('img/doctor.png') }}" class="ui large bordered rounded image">
          </div>
        </div>
        <div class="row">
          <div class="center aligned column">
            <a class="ui huge button" href="{{ action('HomeController@dashboard') }}">Check the dashboard project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('footer')
  @parent
@stop
