@extends('layouts.template')
@section('title', 'Data User')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script> src="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.dataTables.min.css"</script>
<script> src="https://cdn.datatables.net/fixedcolumns/4.0.1/css/fixedColumns.dataTables.min.css"</script> 
<script> src="https://cdn.datatables.net/fixedcolumns/4.0.1/js/dataTables.fixedColumns.min.js"</script>

</head>


  <h1 style="text-align: center;">Data User</h1>
  
  @if (session('success'))
    <div class="alert-success">
       <h5>{{ session('success') }}</h5> 
    </div>
@endif


<div class="container">

<div class="table-responsive my-custom-scrollbar table-wrapper-scroll-y">
  <table style="background-color:#ba0020ff"class="table text-white">
    <thead">
      <tr>
        <th class="bg-dark text-light">Nama</th>
        <th class="bg-dark text-light">Email</th>
        <th style="background-color:#ffc30b" class="text-dark">AKSI</th>
        <th style="background-color:#ffc30b" class="text-dark"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td style="width: 150px" >{{ $user->name}}</td>
        <td style="width: 150px" >{{ $user->email}}</td>
        <td style="width: 50px"><a class="btn btn-success" href="/user/{{ $user->id }}/edit">Edit</a></td>
        <td style="width: 50px"><a class="btn btn-danger" href="/user/{{ $user->id }}/delete">Hapus</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
  </div>
</div>



