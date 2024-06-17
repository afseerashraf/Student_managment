@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ route('storePayment') }}" method="post">
      @csrf
      <label>Enrollment number</label></br>
      <select name="enrollment_id" id="enrollment_id" class="form-control" required>
        @foreach($payment as $id => $enroll_no)
            <option value="{{ $id }}">{{ $enroll_no }}</option>
        @endforeach
      </select></br>
        <label>Paid Date</label></br>
        <input type="date" name="paid_date" id="paid_date" class="form-control" required></br>
        <label>Fees</label></br>
        <input type="text" name="fees" id="fees" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop