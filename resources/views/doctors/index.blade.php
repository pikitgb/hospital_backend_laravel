@extends('layouts.master')

@section('content')
  <div class="content">
    <div class="ui container">
      <br />
      <br />
      <h1> Listing Doctors </h1>
      <hr />
      <a href="{{ action('DoctorsController@create') }}" class="ui button primary">Create new doctor</a>

      <table class="ui celled table">
        <thead>
          <tr>
            <th>Name</th>
            <th>LastName</th>
            <th>Show</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($doctors as $doctor)
            <tr>
              <td>{{ $doctor->name }}</td>
              <td>{{ $doctor->lastname }}</td>
              <td>
                <a href="{{  url('doctors', ['id' => $doctor->id]) }}" class="ui primary button">Show</a>
              </td>
              <td>
                <a href="" class="ui orange button">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@stop
