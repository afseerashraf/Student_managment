@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">
      
      <form action="{{ route('storeTeacher') }}" method="post">
      @csrf
      <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" required></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop