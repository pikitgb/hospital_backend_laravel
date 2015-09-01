@extends('layouts.master')

@section('content')
  <div class="content">
    <div class="ui container">
      <br />
      <br />
      <h1> Doctor details - {{ $doctor->name }} </h1>
      <hr />

      <div class="ui two column grid container">

        <div class="four wide column">

          <div class="ui card">
            <div class="image">
              <img src="{{ asset('/images/catalog/'. $doctor->picture) }} ">
            </div>
            <div class="content">
              <a class="header">{{ $doctor->name }} </a>
              <div class="meta">
                <span class="date">Joined in {{ $doctor->created_at }} </span>
              </div>
              <div class="description">
                Speciality: {{ $doctor->speciality }}
              </div>
              <hr />
              <div class="description">
                <a href="{{ route('doctors.edit', $doctor->id)  }}" class="ui button orange fluid">Edit</a>
              </div>
            </div>

            <div class="extra content">
              <a>
                <i class="info icon"></i>
                Years of experience: {{ $doctor->experience_years_count }}
              </a>
            </div>
          </div>
        </div>

        <div class="twelve wide column" style= "">

          <div class="ui piled segment">
            <div class="ui statistics">
              <div class="statistic">
                <div class="value">
                  {{ $doctor->age }}
                </div>
                <div class="label">
                  Years
                </div>
              </div>
              <div class="statistic">
                <div class="text value">
                  Total Attended<br>
                  Cases
                </div>
                <div class="label">
                  {{ $doctor->attented_cases_number }}
                </div>
              </div>
              <div class="statistic">
                <div class="value">
                  <i class="user icon"></i> {{ $doctor->attended_patients_counter_today }}
                </div>
                <div class="label">
                  Today patients
                </div>
              </div>
            </div>

            <div class="">
              <div id="map" style="width: 780px; height: 500px; border-radius: 10px"></div>

              <script type="text/javascript">
                 var map = new GMap2(document.getElementById("map"));
                 map.setCenter(new GLatLng(51.49, -0.12), 1000);
              </script>
            </div>


          </div>



        </div>








   </div>

    </div>
  </div>
@stop
