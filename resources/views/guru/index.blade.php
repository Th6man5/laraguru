@extends('layouts.template')
@section('title', 'Daftar Guru')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data Guru</h1>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
  @endif
  <a class="btn btn-secondary pule-right" href="http://127.0.0.1:8000/guru/create" role="button">Tambah Data</a>
  <table class="table table-striped">
    <thead class="bg-dark text-white">
      <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Mapel</th>
        <th colspan="4">AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($gurus as $guru)
      <tr>
        <td style="width: 200px" >{{ $guru->nip}}</td>
        <td style="width: 300px" >{{ $guru->nama }}</td>
        <td style="width: 300px" >{{ $guru->mapel }}</td>
        <td style="width: 100px"><a class="btn btn-success" href="{{ route('guru.edit', $guru->id) }}">Edit</a></td>
        <form method="POST" action="{{ url('guru', $guru->id ) }}">
        @csrf
        @method('DELETE')
        <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td></form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
