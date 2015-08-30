@extends('layouts.master')

@section('content')

  <br />
  <br />

  <div class="ui one column grid container">

    <div class="seven wide column centered">

      <div class="ui middle aligned center aligned grid">
        <div class="column">
          <h2 class="ui teal image header">
            <i class="user icon"></i>
            <div class="content">
              Log-in in HospitalCity
            </div>
          </h2>
          <form class="ui large form" method="post" action="/auth/login">
            {!! csrf_field() !!}
            <div class="ui stacked segment">
              <div class="field">
                <div class="ui left icon input">
                  <i class="user icon"></i>
                  <input type="text" name="email" placeholder="E-mail address" value="{{ old('email') }}">
                </div>
              </div>
              <div class="field">
                <div class="ui left icon input">
                  <i class="lock icon"></i>
                  <input type="password" name="password" placeholder="Password">
                </div>
              </div>
              <input type="submit" class="ui fluid large teal submit button" value="Login">
            </div>

            <div class="ui error message"></div>

          </form>

          <div class="ui message">
            Problems to login? <a href="#">Recover password</a>
          </div>
        </div>
      </div>


    </div>

  </div>

@stop
