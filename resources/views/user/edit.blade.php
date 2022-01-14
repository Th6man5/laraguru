@extends('layouts.template')
@section('title', 'Edit Data User')
@section('content')
<br><br><br>


<style>
    .container{
      position: center; 

    }
</style>

  @if (session('success'))
  <div class="alert-success">
    <h5>{{ session('success') }}</h5>
  </div>
  @endif
  
  @if (session('danger'))
  <div class="alert-danger">
    <h5>{{ session('danger') }}</h5>
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
  <br><br>
 
  <div class="container">
  <div class="row">
    <div class="col">
  <div class="card">
    <div class="card-header">
      <h4>Edit Data User</h4> 
     </div>

  <div class="card-body">
  <form method="POST" action="/user/{{ $user->id }}/edit">
    @csrf

    <div class="form-group">
    <label>Nama</label><br>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror 
  </div><br>
  
  <div class="form-group">
    <label>Email</label><br>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email  }}" required autocomplete="email" autofocus>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div><br>


  </div>

    <div class="card-footer bg-grey">
  <div class="d-flex justify-content-end d-grip gap-3">
     <input class="btn btn-dark" type="submit" value="Update">
     <td style="width: 100px"><a class="btn btn-dark" href="http://127.0.0.1:8000/user" role="button">Kembali</a>
  </div>
</div>
    </form>
  </div>
  </div>




   <!-- UPDATE PASSWORD -->

   <div class="col">
    <div class="card">
      <div class="card-header">
        <h4>Reset Password</h4>
      </div>

      <div class="card-body">
      <form method="POST" action="/user/reset/{{ $user->id  }}">
    @csrf

    <div class="form-group">
    <label>Password Lama</label><br>
    <input class="form-control" name="oldpassword" type="password" placeholder="">   
  </div><br>

  <div class="form-group">
    <label>Password Baru</label><br>
    <input class="form-control" name="newpassword" type="password" placeholder="">   
  </div><br>

  <div class="form-group">
    <label>Konfirmasi Password</label><br>
    <input class="form-control" name="confirmpassword" type="password" placeholder="">   
  </div><br>


  </div>
  <div class="card-footer bg-grey">
  <div class="d-flex justify-content-end d-grip gap-3">
     <input class="btn btn-dark" type="submit" value="Update">
 
  </div>
</div>
    </form>
    </div>
    </div>


    
    @endsection

</div>
</div>
</div>


