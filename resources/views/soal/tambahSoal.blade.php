@extends('adminlte::page')

@section('title','Tambah Soal')

@section('content_header')
<h1>Tambah Soal</h1>
@stop 

@section('content')
<div class="alert alert-info d-flex">
  <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
  Pastikan data yang anda isi sudah benar
</div>
<div class="card">
  <div class="card-header">
    Tambah Soal
  </div>
  <div class="card-body">
  <form action="/soal/store" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="mapel" class="form-label">Mapel</label>
    <select name="mapel" class="form-control">
      @foreach ($dataMapel as $mapel)
        <option value="{{ $mapel['namaMapel'] }}">{{$mapel['namaMapel']}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="soal" class="form-label">Soal</label>
    <textarea name="soal" class="form-control" cols="10" rows="5"></textarea>
  </div>
  <div class="mb-3">
    <label for="Pilihan A" class="form-label">Pilihan A</label>
    <input type="text" class="form-control" id="option_a" name="option_a" required> 
  </div>
  <div class="mb-3">
    <label for="Pilihan B" class="form-label">Pilihan B</label>
    <input type="text" class="form-control" id="option_b" name="option_b" required> 
  </div>
  <div class="mb-3">
    <label for="Pilihan C" class="form-label">Pilihan C</label>
    <input type="text" class="form-control" id="option_c" name="option_c" required> 
  </div>
  <div class="mb-3">
    <label for="Pilihan D" class="form-label">Pilihan D</label>
    <input type="text" class="form-control" id="option_d" name="option_d" required> 
  </div>
  <div class="mb-3">
    <label for="Pilihan E" class="form-label">Pilihan E</label>
    <input type="text" class="form-control" id="option_e" name="option_e" required> 
  </div>
  <div class="mb-3">
    <label for="Jawaban" class="form-label">Jawaban</label>
      <select name="jawaban_benar" class="form-control">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
  </div>
</div>
@stop