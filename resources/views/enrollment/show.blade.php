
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment</div>
  <div class="card-body">
  <div class="card-body">
        <h5 class="card-title">Name : {{ $enrollment->enroll_no }}</h5>
        <p class="card-text">Batch : {{ $enrollment->batch->name }}</p>
        <p class="card-text">Student : {{ $enrollment->student->name }}</p>
        <p class="card-text">Join Date : {{ $enrollment->join_date }}</p>
        <p class="card-text">Fees : {{ $enrollment->fees }}</p>


  </div>
      
   
  </div>
</div>
 
@stop