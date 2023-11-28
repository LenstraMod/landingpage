@extends('adminlte::page')

@section('title','dashboard')

@section('content_header')
<h1>Bank Soal UAS 2024/2025</h1>
@stop 

@section('content')
<div class="alert alert-warning d-flex">
  <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
  <marquee behavior="scroll" direction="left"><b>Warning!!</b> || Pastikan data yang dimasukkan,diubah dan dihapus dilakukan dengan benar!</marquee>
</div>
<div class="card">
  <div class="card-header bg-primary">Bank Soal</div>
<div class="card-body">
<a href="/soal/tambah"><div class="btn btn-primary"><i class="fas fa-plus">Tambah Soal</i></div></a>
<div class="btn btn-danger" onclick="window.print()"><i class="fas fa-print">Print</i></div>
    
<table class="table table-striped">
   <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Mapel</th>
      <th scope="col">Soal</th>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">E</th>
      <th scope="col">Pilihan Benar</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @php $i = 1 @endphp
    @foreach($dataSoal as $data)
    
    <tr>
      <td>{{$i++}}</td>
      <td>{{ $data->mapel }}</td>
      <td>{{ $data->soal }}</td>
      <td>{{ $data->option_a }}</td>
      <td>{{ $data->option_b }}</td>
      <td>{{ $data->option_c }}</td>
      <td>{{ $data->option_d }}</td>
      <td>{{ $data->option_e }}</td>
      <td>{{ $data->jawaban_benar }}</td>
      <td>
        <a href="#"><button class="btn btn-primary"><i class="far fa-edit"></i>edit</button></a>
        <a href="#" data-method="delete" data-confirm-delete="true">
        
          <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>hapus</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
@include('sweetalert::alert')
@stop