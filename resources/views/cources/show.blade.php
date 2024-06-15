
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">cource Contact Page</div>
  <div class="card-body">
  <div class="card-body">
        <h5 class="card-title">Name : {{ $cource->name }}</h5>
        <p class="card-text">Syllabus : {{ $cource->syllabus }}</p>
        <p class="card-text">Duration : {{ $cource->duration() }}</p>
  </div>
      
   
  </div>
</div>
 
@stop