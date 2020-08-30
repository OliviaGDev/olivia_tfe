@extends('layouts.app')
@section('content')
<div class="content-container">
  <div class="container-fluid p-5 bg-light">
      <div class="p-5 bg-white">
        <h1>Editer un utilisateur</h1>

      @if ($errors->any())
             <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                 @endforeach
             </ul>
             </div>
      @endif
      <div>
        <div class="col-md-8">
          <form method="POST" action="{{ route('users.update', $user->id) }}" novalidate>
              <!-- Champ CSRF -->
              @csrf
              @method('PUT')

              <div class="form-group row">
                  <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                  <div class="col-md-8">
                      <input id="last_name" type="text" value="{{ $user->last_name}}" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                  <div class="col-md-8">
                      <input id="name" type="text" value="{{ $user->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  </div>
              </div>

              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                  <div class="col-md-8">
                      <input id="email" type="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                  <div class="col-md-8">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                  <div class="col-md-8">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn-editor btn-lg">
                          {{ __('Editer') }}
                      </button>
                  </div>
              </div>
          </form>
        </div>

      </div>

          <a href="{{ route('users.index') }}">
            <button type="submit" class="btn-principal">
              {{ __('Retour') }}
          </button></a>
        </div>
        </div>
      </div>
</div>
@endsection
