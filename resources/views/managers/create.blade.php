@extends('layouts.master')

@section('content')
  <div class="content">
    <div class="ui container">
      <br />
      <br />
      <h1> Create a new manager </h1>
      <hr />
      <a href="{{ action('ManagersController@index') }}" class="ui button primary">Go back (Listing managers)</a>
      <div class="html ui top attached segment">
        {!! Form::open(['action' => 'ManagersController@store', 'method' => 'POST', 'files'=> 'true', 'class' => 'ui form']) !!}
          <h4 class="ui white color dividing header">Please fill the manager information</h4>
              <div class="four wide field">
                {!! Form::label('username', 'Username:') !!}
                {!! Form::text('username', null, ['placeholder' => "Insert the manager name"]) !!}
              </div>
              <div class="four wide field">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', null, ['placeholder' => "Insert the password"]) !!}
              </div>
              <div class="four wide field">
                {!! Form::label('password', 'Password confirmation:') !!}
                {!! Form::password('password_confirmation', null, ['placeholder' => "Insert the password"]) !!}
              </div>

          {!! Form::submit("Save", ['class' => 'ui button green']) !!}

        {!! Form::close() !!}

      </div>

    </div>
  </div>
@stop

