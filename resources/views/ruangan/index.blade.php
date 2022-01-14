@extends('layouts.template')
@section('title', 'Data Ruangan')
@section('content')

  <h1 style="text-align: center;">Data Ruangan</h1>
  
  @if (session('success'))
    <div class="alert-success">
       <h5>{{ session('success') }}</h5> 
    </div>
@endif
<style>


.alert-success h5{
  text-align:center;
  background-color: red;
  animation-name: example;
  animation-duration: 8s;
  animation-iteration-count: infinite;
}

.my-custom-scrollbar {
position: relative;
height: 590px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
<div class="container">
  
<a class="btn btn-secondary" href="http://127.0.0.1:8000/ruangan/create" role="button">Tambah Data</a>

<div class="table-responsive my-custom-scrollbar table-wrapper-scroll-y">
  <table style="background-color:#ba0020ff"class="table text-white">
    <thead">
      <tr>
        <th class="bg-dark text-light">Nama ruangan</th>
        <th style="background-color:#ffc30b" class="text-dark" colspan="2">AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ruangans as $ruangan)
      <tr>
        <td style="width: 150px" >{{ $ruangan->nama}}</td>
        <td style="width: 50px"><a class="btn btn-success" href="{{ route('ruangan.edit', $ruangan->id) }}">Edit</a></td>
        <form method="POST" action="{{ url('ruangan', $ruangan->id ) }}">
        @csrf
        @method('DELETE')
        <td style="width: 50px"><button class="btn btn-danger">Hapus</button></td>
       </form>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
  </div>
</div>


