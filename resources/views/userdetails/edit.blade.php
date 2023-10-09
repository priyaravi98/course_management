@extends('layout.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('userdetails/' .$userdetails->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$userdetails->id}}" id="id" />
        <label>User Id</label></br>
        <input type="text" name="user_id" id="mobile" value="{{$userdetails->user_id}}" class="form-control"></br>
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" value="{{$userdetails->firstname}}" class="form-control"></br>
        <label>LasttName</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$userdetails->lastname}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$userdetails->email}}" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="mobile" value="{{$userdetails->country}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop