@extends('adminlte::page')

@section('title','dashboard')

@section('content_header')
<h1>Edit Data dari Siswa {{$data->nama_siswa}}</h1>
@stop 

@section('content')
<div class="card">
  <div class="card-header">
    Tambah Data
  </div>
  <div class="card-body">
  <form action="/siswa/update/{{$data->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" value="{{$data->nama_siswa}}" name="nama" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="Kelas" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" value="{{$data->kelas}}" name="kelas">
  </div>
  <div class="mb-3">
    <label for="Jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" value="{{$data->jurusan}}" name="jurusan">
  </div>
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label> <br>
    <input type="file" id="gambar" name="gambar"> <br> <br>
    <img src="{{ asset('images/' . $data->gambar)}}" alt="gambar" width="100">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
  </div>
</div>
@stop