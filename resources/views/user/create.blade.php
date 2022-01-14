@extends('layouts.template')
@section('title', 'Buat Data User')
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
      <h4>Tambah Data User</h4> 
     </div>

  <div class="card-body">
  <form method="POST" action="{{ url('user') }}">
    @csrf
    <div class="form-group">
    <label>User</label><br>
    <input class="form-control" name="name" type="text" placeholder=" {{ Auth::user()->name }}">   
  </div><br>
  </div>

  <div class="form-group">
    <label>Email</label><br>
    <input class="form-control" name="email" type="text" placeholder="">   
  </div><br>
  </div>


<div class="card-footer">
  <div class="d-flex justify-content-end d-grip gap-3">
     <input class="btn btn-dark" type="submit" value="Submit">
     <a class="btn btn-dark" href="http://127.0.0.1:8000/user" role="button">Kembali</a>
  </div>
</div>
    </form>
    @endsection
</div>
</div>
</div>

