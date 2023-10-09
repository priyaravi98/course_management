@extends('layout.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Course Details</div>
  <div class="card-body">
       
      <form action="{{ url('coursedetails/' .$coursedetails->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$coursedetails->id}}" id="id" />
        <label>Course Id</label></br>
        <input type="text" name="course_id" id="course_id" value="{{$coursedetails->course_id}}" class="form-control"></br>
        <label>Course Type</label></br>
        <input type="text" name="course_type" id="course_type" value="{{$coursedetails->course_type}}" class="form-control"></br>
        <label>Session Id</label></br>
        <input type="text" name="session_id" id="session_id" value="{{$coursedetails->session_id}}" class="form-control"></br>

        <label>Course Title</label></br>
        <input type="text" name="title" id="title" value="{{$coursedetails->title}}" class="form-control"></br>
        <label>Course description</label></br>
        <input type="text" name="descep" id="descep" value="{{$coursedetails->descep}}" class="form-control"></br>
        <label>Incharge_Email</label></br>
        <input type="text" name="incharge_email" id="incharge_email" value="{{$coursedetails->incharge_email}}" class="form-control"></br>

        <label>Segment Start Time</label></br>
        <input type="text" name="start_time" id="name" value="{{$coursedetails->start_time}}" class="form-control"></br>
        <label>Segment End Time</label></br>
        <input type="text" name="end_time" id="address" value="{{$coursedetails->end_time}}" class="form-control"></br>
        <label>Instuctor Email</label></br>
        <input type="text" name="instuctor_email" id="mobile" value="{{$coursedetails->instuctor_email}}" class="form-control"></br>

        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$coursedetails->duration}}" class="form-control"></br>
        <label>Credit Hours</label></br>
        <input type="text" name="credit_hour" id="address" value="{{$coursedetails->credit_hour}}" class="form-control"></br>
        <label>CPE Hours</label></br>
        <input type="text" name="cpe_hour" id="mobile" value="{{$coursedetails->cpe_hour}}" class="form-control"></br>
        <label>COntact Hours</label></br>
        <input type="text" name="contact_hour" id="mobile" value="{{$coursedetails->contact_hour}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop