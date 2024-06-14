
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Show Batch</div>
  <div class="card-body">
  <div class="card-body">
        <h5 class="card-title">Name : {{ $batch->name }}</h5>
        <p class="card-text">Address : {{ $batch->course_id }}</p>
        <p class="card-text">Mobile : {{ $batch->start_date }}</p>
  </div>
      
   
  </div>
</div>
 
@stop