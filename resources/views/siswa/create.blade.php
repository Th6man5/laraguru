@extends('layouts.template')
@section('title', 'Data Masukan Siswa')
@section('content')
<div class="wrapper">
  <h1></h1>

  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
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

  <div class="card">
    <div class="card-header bg-dark text-white">
      <h5>Tambah Data Siswa</h5> 
     </div>


  <div class="card-body">
  <form method="post" action="{{ url('siswa') }}">
    @csrf
    <div class="form-group">
    <label>Nama</label><br>
    <input class="form-control" name="nama" type="text" placeholder="">   
  </div><br>
  </div>


<div class="card-footer bg-grey">
  <div class="d-flex justify-content-end d-grip gap-3">
     <input class="btn btn-dark" type="submit" value="Submit">
     <a class="btn btn-dark" href="http://127.0.0.1:8000/siswa" role="button">Kembali</a>
  </div>
</div>
    </form>
</div>
</div>

@endsection
