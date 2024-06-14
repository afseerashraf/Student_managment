@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ route('updatedcource') }}" method="post">
       @csrf

        <input type="hidden" name="id" id="id" value="{{encrypt($cource->id)}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$cource->name}}" class="form-control"></br>
        <label>cource Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" value="{{$cource->syllabus}}" class="form-control"></br>
        <label>Cource Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$cource->duration}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop