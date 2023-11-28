@extends('adminlte::page')

@section('title','Tambah Soal')

@section('content_header')
<h1>Selamat Datang, Siswa</h1>
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
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Kelas</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Waktu</th>
        <th scope="col">Bobot Nilai</th>
        <th scope="col">Status</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach($siswa as $siswa) --}}
      <tr>
        <td> 1</td>
        <td>Matematika</td>
        <td>XII</td>
        <td>Semua Jurusan</td>
        <td>90 Menit</td>
        <td>100</td>
        <td>Belum Mengerjakan</td>
        <td>    
            <button class="btn btn-warning"></i>Kerjakan</button></a>

        </td>
      </tr>
      {{-- @endforeach --}}
    </tbody>
  </table>
    </div>
  </div>
@stop