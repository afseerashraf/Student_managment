
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment</div>
  <div class="card-body">
  <div class="card-body">
        <h5 class="card-title">Name : {{ $enrollment->enroll_no }}</h5>
        <p class="card-text">Address : {{ $enrollment->batch_id }}</p>
        <p class="card-text">Mobile : {{ $enrollment->student_id }}</p>
        <p class="card-text">Mobile : {{ $enrollment->fees }}</p>

  </div>
      
   
  </div>
</div>
 
@stop