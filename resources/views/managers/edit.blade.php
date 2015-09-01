@extends('layouts.master')

@section('content')
  <div class="content">
    <div class="ui container">
      <br />
      <br />
      <h1> Edit the doctor information </h1>
      <hr />
      <a href="{{ action('DoctorsController@index') }}" class="ui button primary">Go back (Listing doctors)</a>
      <div class="html ui top attached segment">
        {!! Form::model($doctor, ['method' => 'PATCH', 'route' => ['doctors.update', $doctor->id], 'files'=> 'true', 'class' => 'ui form']) !!}
          <h4 class="ui white color dividing header">Please fill the doctor information</h4>
              <div class="four wide field">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['placeholder' => "Insert the doctor name"]) !!}
              </div>
              <div class="four wide field">
                {!! Form::label('lastname', 'Lastname:') !!}
                {!! Form::text('lastname', null, ['placeholder' => "Insert the doctor lastname"]) !!}
              </div>

          <div class="field">
            <div class="three fields">
              <div class="two wide field">
                {!! Form::label('age', 'Age:') !!}
                {!! Form::number('age', null, ['placeholder' => "Insert age"]) !!}
              </div>
              <div class="four wide field">
                {!! Form::label('experience_years_count', 'Years of experience:') !!}
                {!! Form::number('experience_years_count', null, ['placeholder' => "How many experience years?"]) !!}
              </div>
              <div class="eight wide field">
                {!! Form::label('speciality', 'Speciality:') !!}
                {!! Form::text('speciality', null, ['placeholder' => "Describe the speciality of this doctor"]) !!}
              </div>

            </div>

            <div class="eight wide field">
              {!! Form::label('picture', 'Add picture') !!}
              {!! Form::file('picture') !!}
            </div>

            <div class="eight wide field">
              <b>
                Profile picture:
              </b>
              {{ $doctor->picture }}
              <br />
              <img src="{{ url('images/catalog/'.$doctor->picture) }}" alt="" style="height: 90px"/>
            </div>
          </div>
          {!! Form::submit("Save", ['class' => 'ui button green']) !!}

        {!! Form::close() !!}

      </div>

    </div>
  </div>
@stop

