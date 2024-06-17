@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
  
  <form action="{{ route('updatePayment') }}" method="post">
      @csrf
      <input type="hidden" name="id" id="id" value="{{encrypt($payment->id)}}" id="id" />

      <label>Enrollment number</label></br>
        <input type="text" name="enroll_no" id="enroll_no" value="{{ $payment->enroll_no }}" class="form-control"></br>
        <label>Paid Date</label></br>
        <input type="date" name="paid_date" id="paid_date" value="{{ $payment->paid_date }}"  class="form-control"></br>
        <label>Fees</label></br>
        <input type="text" name="fees" id="fees" value="{{ $payment->fee }}" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop