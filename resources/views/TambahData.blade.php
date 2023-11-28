@extends('adminlte::page')

@section('title','Tambah Data')

@section('content_header')
<h1>Tambah Data</h1>
@stop 

@section('content')
<div class="alert alert-info d-flex">
  <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
  Pastikan data yang anda isi sudah benar
</div>
<div class="card">
  <div class="card-header">
    Tambah Data
  </div>
  <div class="card-body">
  <form action="/siswa/store" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required>
  </div>
  <div class="mb-3">
    <label for="Kelas" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" required>
  </div>
  <div class="mb-3">
    <label for="Jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" required> 
  </div>
  <div class="mb-3">
    <label for="gambar" class="form-label">gambar</label>
    <input type="file" id="gambar" name="gambar" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
  </div>
</div>
@stop