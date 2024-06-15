@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
  
  <form action="{{ route('updateEnrollment') }}" method="post">
      @csrf
      <input type="hidden" name="id" id="id" value="{{encrypt($enrollment->id)}}" id="id" />

      <label>Enrollment number</label></br>
        <input type="text" name="enroll_no" id="enroll_no" value="{{ $enrollment->enroll_no }}" class="form-control"></br>
        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{ $enrollment->batch_id }}"  class="form-control"></br>
        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" value="{{ $enrollment->student_id }}" class="form-control"></br>
        <label for="fees">Fees</label>
        <input type="text" name="fees" id="fees" value="{{ $enrollment->fees }}" class="form-control">
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop