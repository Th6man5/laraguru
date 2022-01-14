@extends('layouts.template')
@section('title', 'Jadwal')
@section('content')
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
  <h1>Jadwal Guru</h1>
  @if (session('success'))
    <div class="alert-success">
       <h5>{{ session('success') }}</h5> 
    </div>
  @endif
  
  <div class="container">
  <a class="btn btn-secondary pule-right" href="http://127.0.0.1:8000/jadwal/create" role="button">Tambah Data</a>
  <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
  <table class="table">
    
    <thead">
      <tr>
        <th class="bg-dark text-white">Nama Guru</th>
        <th class="bg-dark text-white">Kelas</th>
        <th class="bg-dark text-white">Ruangan</th>
        <th class="bg-dark text-white">Mulai</th>
        <th class="bg-dark text-white">Akhir</th>
        <th class="bg-dark text-white">tanggal</th>
        <th style="background-color:#ffc30b" class="text-dark text-center" colspan="4">AKSI</th>
      </tr>
    </thead>
    <tbody class="text-light">
    @foreach ($data as $da)
        <td style="width: 200px" >{{$da->nama_guru}}</td>
        <td style="width: 200px" >{{$da->nama_kelas}}</td>
        <td style="width: 200px" >{{$da->nama_ruangan}}</td>
        <td style="width: 100px" >{{$da->mulai}}</td>
        <td style="width: 150px" >{{$da->akhir}}</td>
        <td style="width: 200px" >{{$da->tanggal}}</td>
        <form method="POST" action="{{ url('jadwal', $da->id ) }}">
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