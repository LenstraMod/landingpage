@extends('adminlte::page')

@section('title','Profile')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<p>Hallo {{$user}},Welcome to Profile</p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('hello');
</script>
@stop