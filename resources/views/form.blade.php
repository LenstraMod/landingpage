@extends('adminlte::page')

@section('title','dashboard')

@section('content_header')
<h1>CHANGE PASSWORD</h1>
@stop

@section('content')
<div class="card">
  <div class="card-header">
    change password
  </div>
  <div class="card-body">
  <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
@stop
