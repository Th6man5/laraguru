@extends('layouts.template')
@section('title', 'Data Masukan Guru')
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

<style>
.card{
   background-color:#0d1137;
   animation-name:bodycard;
   animation-duration: 8s;
   animation-iteration-count: infinite
 }
 .card-body{
   background-color:#0d1137;
   animation-name:bodycard;
   animation-duration: 8s;
   animation-iteration-count: infinite
 }
/*#0d1137 <-Raisin
#e52165 <-Pink */
  @keyframes bodycard {
    0%{background-color:#0d1137;}
    50%{background-color:#e52165;}
    100%{background-color:#0d1137;}
    
  }
  h4{
   color:#0d1137;
   animation-name:h4card;
   animation-duration: 8s;
   animation-iteration-count: infinite
  }

  @keyframes h4card{
    0%{color:#0d1137}
    50%{color:#e52165}
    100%{color:#0d1137}
  }

  label{
    color:#e52165;
    animation-name:whiteblack;
    animation-duration:8s;
    animation-iteration-count:infinite;
  }

  @keyframes whiteblack{
    0%{color:#e52165}
    50%{color:#0d1137}
    100%{color:#e52165}
  }

  .card-footer{
    background-color:#e52165;
    animation-name:whiteblackfoot;
    animation-duration:8s;
    animation-iteration-count:infinite;
  }

  @keyframes whiteblackfoot{
    0%{background-color:#e52165}
    50%{background-color:#0d1137}
    100%{background-color:#e52165}
  }
  .card-header{
    background-color:#e52165;
    animation-name:whiteblackfoot;
    animation-duration:8s;
    animation-iteration-count:infinite;
  }
</style>



  <div class="container">
  <div class="card">
    <div class="card-header">
      <h4>Tambah Data Guru</h4> 
     </div>

     <div class="card-body text-light">
  <form method="post" action="{{ url('guru') }}">
    @csrf

    <div class="form-group">
    <label>NIP</label><br>
    <input class="form-control" name="nip" type="number" placeholder="">   
  </div><br>

  <div class="form-group">
    <label>Nama</label><br>
    <input class="form-control " name="nama" type="text" placeholder="">   
  </div><br>

  <div class="form-group">
    <label>Mapel</label><br>
    <input class="form-control" name="mapel" type="text" placeholder="">   
  </div><br>
</div>

<div class="card-footer">
  <div class="d-flex justify-content-end d-grip gap-3">
     <input class="btn btn-dark" type="submit" value="Submit">
     <a class="btn btn-dark" href="http://127.0.0.1:8000/guru" role="button">Kembali</a>
  </div>
</div>
   </form>
   @endsection
</div>
</div>
</div>
