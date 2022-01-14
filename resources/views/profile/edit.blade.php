@extends('layouts.app')

@section('content')


<br>
<br>
<br>
<div class="container">
  <div class="card col-md-3">
    <div class="card-header">
      <h4>Haloo</h4>

      <div class="card-body">
      <form method="post" action="{{ url('profile', $profile->id ) }}">
    @csrf
    @method('PUT')
    <label for="name">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    <br>

                <label for="email">{{ __('E-Mail Addresss') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
  </div>
</div>
@endsection