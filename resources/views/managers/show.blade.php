@extends('layouts.master')

@section('content')
  <div class="content">
    <div class="ui container">
      <br />
      <br />
      <h1> Manager details - {{ $manager->username }} </h1>
      <hr />

      <div class="ui two column grid container">
        <div class="four wide column">
          <b>Username: </b> {{ $manager->username }}
          <br />
          <b>Created at: </b> {{ $manager->created_at }}
        </div>
      </div>
    </div>
  </div>
@stop
