@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batch Page</div>
  <div class="card-body">
      
      <form action="{{ route('storeBatch') }}" method="post">
      @csrf
      <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Course</label></br>
        <!-- <input type="text" name="course_id" id="course_id" class="form-control"></br> -->
        <select name="cource_id" id="cource_id" required>
        @foreach($cources as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
        </select>
        <label>Start Date</label></br>
        <input type="text" name="startdate" id="startname" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop