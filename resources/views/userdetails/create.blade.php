
@extends('layout.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New User</div>
  <div class="card-body">
       
  <form action="{{ url('userdetails') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>UserId</label></br>
        <input type="text" name="user_id" id="user_id" class="form-control"></br>
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
        <label>LastName</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br> 
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop