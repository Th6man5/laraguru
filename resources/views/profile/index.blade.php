@extends('layouts.app')

@section('content')
<style>
  .box{
    padding: 50px;
    border-radius: 0.625rem;
  }
</style>

<br>
<br>
<br>
<div class="box">
  <div class="card col-md-3">
    <div class="card-header bg-dark text-white">
      <h4>Edit Profile</h4>
</div>

      <div class="card-body">
      <form method="post" action="{{ url('profile') }}">
    @csrf
    @method('PUT')
    <label for="name">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder=" {{ Auth::user()->name }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    <br>

                <label for="email">{{ __('E-Mail Addresss') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder=" {{ Auth::user()->email }}" >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
             
            </div>

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
            </div>


    </div>
    </form>
  </div>
</div>
</div>



@endsection