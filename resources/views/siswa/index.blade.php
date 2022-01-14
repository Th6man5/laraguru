@extends('layouts.template')
@section('title', 'Daftar Siswa')
@section('content')
<div class="wrapper wrapper-full-page">
  <h1 style="text-align: center;">Data Siswa</h1>
  @if (session('success'))
    <div class="alert-success">
       <h5>{{ session('success') }}</h5> 
    </div>
  @endif
  <div class="container">
  <a class="btn btn-secondary pull-right" href="http://127.0.0.1:8000/siswa/create" role="button">Tambah Data</a>

  <div class="table-responsive">
  <table class="table text-white">
    <thead class="bg-dark text-white">
      <tr>
        <th>Nama</th>
        <th style="background-color:#ffc30b" class="text-dark"colspan="2">AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswas as $siswa)
      <tr>
        <td style="width: 200px" >{{ $siswa->nama}}</td>
        <td style="width: 50px"><a class="btn btn-success" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a></td>
        <form method="POST" action="{{ url('siswa', $siswa->id ) }}">
        @csrf
        @method('DELETE')
        <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td></form>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
  </div>
</div>
</div>

