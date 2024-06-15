@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ route('storeEnrollment') }}" method="post">
      @csrf
      <label>Enrollment number</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>
        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control"></br>
        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control"></br>
        <label for="join date">Join Date</label>
        <input type="date" name="join_date" id="join_date" class="form-control">
        <label for="fees">Fees</label>
        <input type="text" name="fees" id="fees" class="form-control">
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop