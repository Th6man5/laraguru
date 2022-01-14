@extends('layouts.template')
@section('title', 'Daftar Guru')
@section('content')

<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</head>




<style>

.my-custom-scrollbar {
position: relative;
height: 590px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
  </style>
  <h1>Data Guru</h1>
  @if (session('success'))
    <div class="alert-success">
       <h5>{{ session('success') }}</h5> 
    </div>
  @endif
  
  <div class="container">
  <a class="btn btn-secondary pule-right" href="http://127.0.0.1:8000/guru/create" role="button">Tambah Data</a>
  <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
  <table class="table">
    
    <thead">
      <tr>
        <th class="bg-dark text-white">NIP</th>
        <th class="bg-dark text-white">Nama</th>
        <th class="bg-dark text-white">Mapel</th>
        <th style="background-color:#ffc30b" class="text-dark" colspan="4">AKSI</th>
      </tr>
    </thead>
    <tbody class="text-light">
      @foreach ($gurus as $guru)
      <tr>
        <td style="width: 200px" >{{ $guru->nip}}</td>
        <td style="width: 300px" >{{ $guru->nama }}</td>
        <td style="width: 300px" >{{ $guru->mapel }}</td>
        <td style="width: 50px" class=""><a class="btn btn-success" href="{{ route('guru.edit', $guru->id) }}">Edit</a></td>
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
</div>

