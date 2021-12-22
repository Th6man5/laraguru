@extends('layouts.app')
@section('title', 'Perbarui Data Kelas')
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
  
  <form method="POST" action="{{ url('kelas', $kelas->id ) }}">
    @csrf
    @method('PUT')
    <input name="nama" value="{{ $kelas->title }}" type="text" placeholder="Nama Kelas..."> 
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
