@extends('layouts.app')

@section('content')

<main class="container auth">
  @if ($errors->has('email'))
  <div class="message error">
      {{ $errors->first('email') }}
  </div>
  @endif
  @if ($errors->has('password'))
  <div class="message error">
      {{ $errors->first('password') }}
  </div>
  @endif


<div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="p-2">
                      <div class="form-group row">
                          <label for="email" >{{ __('E-Mail') }}</label>
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                      </div>
                      <div class="form-group row">
                          <label for="password" >{{ __('Mot de Passe') }}</label>


                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                      </div>
                      <div class="form-group row">
                          <div>
                              <button type="submit" class="btn btn-submit btn-block">
                                  {{ __('Connexion') }}
                              </button>

                          </div>
                      </div>
                  </form>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection
