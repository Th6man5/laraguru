@extends('layouts.template')
@section('title', 'Tambah Data Kelas')
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
    <div class="card-header ">
      <h4>Tambah Data Kelas</h4> 
     </div>


  <div class="card-body">
  <form method="POST" action="{{ url('kelas') }}">
    @csrf
    <div class="form-group">
    <label>Nama</label><br>
    <input class="form-control" name="nama" type="text" placeholder="">   
  </div><br>
  </div>


<div class="card-footer">
  <div class="d-flex justify-content-end d-grip gap-3">
     <input class="btn btn-dark" type="submit" value="Submit">
     <td style="width: 100px"><a class="btn btn-dark" href="http://127.0.0.1:8000/kelas" role="button">Kembali</a>
  </div>
</div>
    </form>
    @endsection
</div>
</div>
</div>
