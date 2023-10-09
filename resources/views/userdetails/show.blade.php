@extends('layout.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">User details</div>
  <div class="card-body">
        <div class="card-body">
        
        <h5 class="card-title">FirstName : {{ $userdetails->firstname }}</h5>
        <p class="card-text">User Id : {{ $userdetails->user_id }}</p>
        <p class="card-text">LastName : {{ $userdetails->lastname }}</p>
        <p class="card-text">Email : {{ $userdetails->email }}</p>
        <p class="card-text">Country : {{ $userdetails->country }}</p>
  </div>
    </hr>
  </div>
</div>
@endsection