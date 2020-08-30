{{--
      resources/views/estimates/index.blade.php
      Variables disponibles :
        $estimates Array (OBJ ( id, summerize, proposition, composition, categorie, client ))
 --}}

@extends('layouts.app')
@section('content')

<div class="content-container">
  <div class="container-fluid p-5 bg-light">
      <div class="p-5 bg-white">
          <h1>Devis</h1>
          <div class="pb-4">
            <a href="{{ route('estimates.create')}}">
            <button type="submit" class="btn-create btn-lg">
                {{ __('Créer') }}
            </button></a>
          </div>

    <div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Résumé</th>
            <th scope="col">Proposition</th>
            <th scope="col">Client</th>

            <th scope="col">Catégorie</th>
            <th scope="col">PDF à télécharger</th>
            <th scope="col">PDF à visualiser</th>
          </tr>
        </thead>

          @foreach ($estimates as $estimate)

          <tr>
            <td scope="row">{{ $estimate->summerize }}</td>
            <td scope="row">{{ $estimate->proposition }}</td>
            <td scope="row">{{$estimate->company}}</td>
            <td scope="row">{{ $estimate->name }}</td>
          <td scope="row"><a href="{{action('EstimateController@estimateDownloadPDF', $estimate->idEstimate)}}">Générer le PDF</a></td>
            <td scope="row"><a href="{{action('EstimateController@estimateStreamPDF', $estimate->idEstimate)}}">Prévisualiser le PDF</a></td>
          </tr>
          {{-- @endif --}}
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="pt-2">
      <div class="d-flex justify-content-center">
         {{ $estimates->links() }}
      </div>
    </div>
  </div>
</div>
</div>


@endsection
