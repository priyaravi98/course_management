@extends('layout.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-title">Course Id : {{ $coursedetails->course_id }}</p>
        <p class="card-text">Course Type : {{ $coursedetails->course_type }}</p>
        <p class="card-text">Session Id : {{ $coursedetails->session_id }}</p>
        <p class="card-title">Course Title : {{ $coursedetails->title }}</p>
        <p class="card-text">Course description : {{ $coursedetails->descep }}</p>
        <p class="card-text">Incharge_Email : {{ $coursedetails->incharge_email }}</p>
        <p class="card-title">Segment Start Time : {{ $coursedetails->start_time }}</p>
        <p class="card-text">Segment End Time : {{ $coursedetails->end_time }}</p>
        <p class="card-text">Instuctor Email : {{ $coursedetails->instuctor_email }}</p>
        <p class="card-title">Duration : {{ $coursedetails->duration }}</p>
        <p class="card-text">Credit Hours : {{ $coursedetails->credit_hour }}</p>
        <p class="card-text">CPE Hours : {{ $coursedetails->cpe_hour }}</p>
        <p class="card-text">COntact Hours : {{ $coursedetails->contact_hour }}</p>
  </div>
    </hr>
  </div>
</div>

@endsection