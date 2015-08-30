@extends('layouts.master')

@section('presentation')
<br />
<br />
  <div class="ui container">
    <h1>Welcome to the HospitalCity Backend</h1>
    <hr />
  </div>

@stop

@section('content')

  <div class="ui two column grid container">

    <div class="four wide column">

      <div class="ui people shape">
        <div class="sides">
          <div class="side">
            <div class="ui card">
              <div class="image">
                <img src="img/doctor3.png">
              </div>
              <div class="content">
                <div class="header">Last doctor reported</div>
                <div class="meta">
                  <a>Doctor Name</a>
                </div>
                <div class="description">
                  Current possition: 1268 W 29th PL, Hialeah FL, 33010
                </div>
              </div>
              <div class="extra content">
                <span class="right floated">
                  Reported at: 1 hour ago
                </span>
                <span>
                  <i class="user icon"></i>
                  1511 Cases
                </span>
              </div>
            </div>
          </div>
          <div class="side active">
            <div class="ui card">
              <div class="image">
                <img src="img/doctor2.png">
              </div>
              <div class="content">
                <a class="header">Stevie Feliciano</a>
                <div class="meta">
                  <span class="date">Joined in 2014</span>
                </div>
                <div class="description">
                  Stevie Feliciano is a library scientist living in New York City. She likes to spend her time reading, running, and writing.
                </div>
              </div>
              <div class="extra content">
                <a>
                  <i class="user icon"></i>
                  22 Friends
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ui twelve wide column">
      <div class="ui inverted segment">
        <div class="ui inverted progress orange" data-percent="{{ $doctors_counter }}">
          <div class="bar" style="transition-duration: 300ms; width: {{ $doctors_counter }}%;">
         </div>
          <br />
          <a href="{{ url('doctors') }}" class="ui orange button">See all doctors</a>
        </div>
        <div class="ui inverted progress success" data-percent="{{ $managers_counter }}">
          <div class="bar" style="transition-duration: 300ms; width: {{ $managers_counter}}%;">
          </div>
          <br />
          <a href="/managers" class="ui green button">See all managers</a>
        </div>
      </div>

      <div style="margin-left: 20px">
        <div id="map" style="width: 780px; height: 470px; border-radius: 10px"></div>

        <script type="text/javascript">
           var map = new GMap2(document.getElementById("map"));
           map.setCenter(new GLatLng(51.49, -0.12), 13);
        </script>
      </div>

    </div>


  </div>

  <script type="text/javascript" charset="utf-8">
    $('.shape').shape('flip up');
  </script>

@stop

@section('footer')
  @parent
@stop
