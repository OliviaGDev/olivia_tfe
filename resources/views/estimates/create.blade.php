{{--
      resources/views/estimates/create.blade.php
      Variables disponibles :
        $estimates Array (OBJ ( id, summerize, proposition, composition, categorie, client ))
 --}}

@extends('layouts.app')
@section('content')

<div class="content-container">
  <div class="container-fluid p-5 bg-light">
    <div class="pt-3 bg-white">
      <div class="d-inline-flex w-100">
        <div class="col-md-6">
          <div class="pb-4">
            <h1>Créer un devis</h1>
          </div>
              <ul id="sortable1" class="list-group list-group-flush moduleToSave list-unstyled connectedSortable"><span id="loader"></span>
            </ul>
        </div>
          <div class="col-md-6">
            <form method="POST" action="{{ route('estimates.store')}}" enctype="multipart/form-data" role="form" novalidate>
              @csrf
              @method('POST')
              <div class="form-group row">
                <div>
                  <button  type="submit" class="btn-create btn-lg">
                    {{ __('Créer un devis') }}
                  </button>
                </div>
              </div>
              <div class="form-group row">
                <label for="categorie_id" class="col-md-4">{{ __('Catégorie') }}</label>
              <div class="col-md-4"></label>
                <div class="col-md-8">
                  <select class="form-control options-select w-40" id="categorie_id" required autocomplete="categorie_id" name="categorie_id" autofocus>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}" {{$estimate->category_id === $category->id ? "selected" : ''}}>
                        {{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                </div>
            </div>
            <div class="form-group row">
              <label for="client_id" class="col-md-4">{{ __('Client') }}</label>
              <div class="col-md-4"></label>
              <div class="col-md-8">
                <select class="form-control  options-select w-40" id="client_id" required autocomplete="client_id" name="client_id" autofocus>
                  @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{$estimate->client_id === $client->id ? "selected" : ''}}>
                      {{$client->company}}</option>
                  @endforeach
                </select>
              </div>
              </div>
            </div>

            {{-- PDF PREVIEW --}}
            <div class="space-pdf"></div>
              <div class="border page-pdf ">
                <div class="insert-pdf-1-3">
                  <div class="title-pdf-vue">
                    <h1>Titre</h1>
                      <p class="subtitle-pdf-vue">Aperçu</p>
                  </div>
                </div>
              <div class="content-pdf-vue">
                <h2 class="font-weight-bold">Résumé.</h2>
                  <div class="form-group">
                    <textarea class="form-control" id="summerize" rows="1" class="form-control @error('ref') is-invalid @enderror" name="summerize" required autocomplete="summerize" autofocus></textarea>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div class="pt-3">
                    <h2 class="font-weight-bold">Proposition.
                      <div class="form-group">
                        <textarea class="form-control" id="summerize" rows="1" class="form-control @error('ref') is-invalid @enderror" name="proposition" required autocomplete="proposition" autofocus></textarea>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </div>
                  </div>
              </div>
              <div class="p-5">
                <h2>Insérer les modules</h2>
                  <ul id="sortable2" class="list-group list-group-flush moduleToSave list-unstyled connectedSortable">
                    <li data-array-module="Array Module" id="addModule"></li>
                  </ul>
              </div>
            </div>
            </div>
            <input type="hidden" name="estimates_items" value="" />
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
