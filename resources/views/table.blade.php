@extends('adminlte::page')

@section('title','dashboard')

@section('content_header')
<h1>Tampil Data</h1>
@stop 

@section('content')
<div class="alert alert-warning d-flex">
  <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
  <marquee behavior="scroll" direction="left"><b>Warning!!</b> || Pastikan data yang dimasukkan,diubah dan dihapus dilakukan dengan benar!</marquee>
</div>
<div class="card">
  <div class="card-header bg-primary">Data siswa</div>
<div class="card-body">
<a href="/siswa/tambah"><div class="btn btn-primary"><i class="fas fa-plus">Tambah Siswa</i></div></a>
<div class="btn btn-danger" onclick="window.print()"><i class="fas fa-print">Print</i></div>
    
<table class="table table-striped">
   <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($siswa as $siswa)
    <tr>
      <td> {{ $i++ }}</td>
      <td>{{ $siswa->nama_siswa }}</td>
      <td>{{ $siswa->kelas }}</td>
      <td>{{ $siswa->jurusan }}</td>
      <td><img src="{{ asset('images/' . $siswa->gambar ) }}" alt="gambar" width="50"></td>
      <td>
        <a href="/siswa/edit/{{ $siswa->id }}"><button class="btn btn-primary"><i class="far fa-edit"></i>edit</button></a>
        <a href="/siswa/delete/{{ $siswa->id }}" data-method="delete" data-confirm-delete="true">
        
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