{{--
      resources/views/clients/index.blade.php
      Variables disponibles :
        $clients Array (OBJ ( id, company, street, number, postal_code, postal_box, city , contact, email, phone, tva, logo, country ))
 --}}
 
@extends('layouts.app')
@section('content')

<div class="content-container">
  <div class="container-fluid p-5 bg-light">
    <div class="p-5 bg-white">
      <h1>Créer un client</h1>
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
          <form method="POST" action="{{ route('clients.store')}}" role="form" enctype="multipart/form-data" novalidate>
                  <!-- Champ CSRF -->
                  @csrf
                  @method('POST')
                  <div class="form-group row">
                      <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Société *') }}</label>

                      <div class="col-md-6">
                          <input id="company" type="text" value="" class="form-control @error('company') is-invalid @enderror" name="company" required autocomplete="company" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact *') }}</label>

                      <div class="col-md-6">
                          <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" required autocomplete="contact" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Rue') }}</label>

                      <div class="col-md-6">
                          <input id="street" type="text" value="" class="form-control @error('street') is-invalid @enderror" name="street" autocomplete="street" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Numéro') }}</label>

                      <div class="col-md-6">
                          <input id="number" type="text" value="" class="form-control @error('number') is-invalid @enderror" name="number"  autocomplete="number" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="postal_box" class="col-md-4 col-form-label text-md-right">{{ __('Boîte Postale') }}</label>

                      <div class="col-md-6">
                          <input id="postal_box" type="text" value="" class="form-control @error('postal_box') is-invalid @enderror" name="postal_box"  autocomplete="postal_box" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label>

                      <div class="col-md-6">
                          <input id="postal_code" type="text" value="" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" autocomplete="postal_code" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                      <div class="col-md-6">
                          <input id="city" type="text" value="" class="form-control @error('city') is-invalid @enderror" name="city" autocomplete="city" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>

                        <select optionselectcreate="true" class="form-control  options-select w-50" name=country_id>
                              @foreach ($countries as $country)
                                <option value="{{ $country->id}}">{{$country->country_name}}</option>
                              @endforeach
                        </select>
                  </div>
                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email *') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                      <div class="col-md-6">
                          <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" autocomplete="phone" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="tva" class="col-md-4 col-form-label text-md-right">{{ __('N° TVA') }}</label>

                      <div class="col-md-6">
                          <input id="tva" type="text" class="form-control @error('tva') is-invalid @enderror" name="tva" autocomplete="tva" autofocus>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                      <div class="col-md-6">
                          <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" autocomplete="logo" autofocus>
                      </div>
                  </div>
                  <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn-create btn-lg">
                              {{ __('Créer') }}
                          </button>
                      </div>
                  </div>
              </form>
            </div>
      </div>
      <a href="{{ route('clients.index') }}">
        <button type="button" class="btn-principal">
          {{ __('Retour') }}
        </button>
      </a>
    </div>
  </div>
</div>

@endsection
