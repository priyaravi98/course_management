@if ($errors->any())
<ul>
{!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>

@endif

@extends('layout.layout')
@section('content')

    <session>
    <div class="container-fluid">
    <div class="row ">
<h3 class="fw-normal text-center mt-5" style="letter-spacing: 1px;">Register</h3>
            
            
  <!--Grid column-->
  <div class="col-md-6 col-lg-8 d-flex justify-content-center" style="margin-left:200px;">
  <form method='POST' action='/store' style="width: 20rem;">
  <div class="form-outline mb-2">
  <label class="form-label" for="form2Example1">Name</label>
    <input type="text" name="name" id="form2Example1" class="form-control justify-content-center" />
    
  </div>

  <div class="form-outline mb-2">
  <label class="form-label" for="form2Example1">Email address</label>
    <input type="email" name="email" id="form2Example1" class="form-control justify-content-center" />
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-2">
  <label class="form-label" for="form2Example2">Password</label>
    <input type="password" name="password" id="form2Example2" class="form-control" />
    
  </div>

  <div class="form-outline mb-2">
  <label class="form-label" for="form2Example2">Password</label>
    <input type="password" name="password_confirmation" id="form2Example2" class="form-control" />
    
  </div>

    <button type="submit" class="btn btn-primary btn-block mb-2">Sign in</button>

    @csrf </form></div></div></div>
  
</session>
 

@endsection
