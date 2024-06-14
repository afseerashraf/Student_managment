@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batch Page</div>
  <div class="card-body">
      
      <form action="{{ route('storeBatch') }}" method="post">
      @csrf
      <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="course_id" id="course_id" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="text" name="startdate" id="startname" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop