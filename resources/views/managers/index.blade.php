@extends('layouts.master')

@section('content')
  <div class="content">
    <div class="ui container">
      <br />
      <br />
      <h1> Listing Managers </h1>
      <hr />
      <a href="{{ action('ManagersController@create') }}" class="ui button primary">Create new manager</a>

      <table class="ui celled table">
        <thead>
          <tr>
            <th>Username</th>
            <th>Show</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($managers as $manager)
            <tr>
              <td>{{ $manager->username }}</td>
              <td>
                <a href="{{  url('managers', ['id' => $manager->id]) }}" class="ui primary button">Show</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@stop
