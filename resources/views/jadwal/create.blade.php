@extends('layouts.template')   
@section('title', 'Jadwal')
@section('content')

<br><br>
@if (session('success'))
  <div class="alert-success">
    <h5>{{ session('success') }}</h5>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

<div class="container">
  <div class="card">
    <div class="card-header">
      <h4>Buat Jadwal Baru</h4> 
     </div>

     <div class="card-body text-light">
  <form method="post" action="{{ url('jadwal') }}">
    @csrf

    <div class="form-group">
    <label>Nama Guru</label>
    <select class="form-control" name="id_guru">
        <option value="" selected disabled>Pilih Guru</option>
        @foreach ($guru as $gu)
        <option value="{{$gu->id}}">{{$gu->nama}}</option>
        @endforeach
    </select>
  </div><br>

  <div class="form-group">
    <label>Kelas</label><br>
    <select class="form-control" name="id_kelas">
        <option value="" selected disabled>Pilih Kelas</option>
        @foreach ($kelas as $kel)
        <option value="{{$kel->id}}">{{$kel->nama}}</option>
        @endforeach
    </select>
  </div><br>

  <div class="form-group">
    <label>Ruangan</label><br>
    <select class="form-control" name="id_ruangan">
        <option value="" selected disabled>Pilih Ruangan</option>
        @foreach ($ruangan as $ruang)
        <option value="{{$ruang->id}}">{{$ruang->nama}}</option>
        @endforeach
    </select>
  </div><br>

  <div class="form text-dark col-md-1">
    <label>Waktu</label><br>
    <input class="form-control " name="mulai" type="time" placeholder="00:00">   -  <input class="form-control " name="akhir" type="time" placeholder="00:00">
  </div><br>
    
  <div class="form text-dark col-md-2">
    <label>Tanggal</label><br>
    <input class="form-control " name="tanggal" type="date"> 
  </div><br>

</div>

<div class="card-footer">
  <div class="d-flex justify-content-end d-grip gap-3">
     <input class="btn btn-dark" type="submit" value="Submit">
     <a class="btn btn-dark" href="http://127.0.0.1:8000/jadwal" role="button">Kembali</a>
  </div>
</div>
   </form>
   @endsection
</div>
</div>
</div>
