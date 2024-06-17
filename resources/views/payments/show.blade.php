
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment</div>
  <div class="card-body">
  <div class="card-body">
        <h5 class="card-title">Enrollment Number : {{ $payment->enrollment_id }}</h5>
        <p class="card-text">Paid Date : {{ $payment->paid_date }}</p>
        <p class="card-text">Fees : {{ $payment->fee }}</p>


  </div>
      
   
  </div>
</div>
 
@stop