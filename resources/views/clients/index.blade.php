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
      <h1>Clients</h1>
        <div class="d-flex justify-content-md-between">
          <div>
            <a href="{{ route('clients.create')}}">
              <button type="submit" class="btn-create btn-lg">
                  {{ __('Créer un client') }}
              </button>
            </a>
          </div>
          <div class="item-hl">
            <div class="form-group">
                <input type="text" name="search" id="search" name="search" class="form-control" placeholder="Rechercher un client"/>
            </div>
          </div>
        </div>
        <div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Nom</th>
                  <th scope="col">Personne de contact</th>
                  <th scope="col">Rue</th>
                  <th scope="col">Numéro</th>
                  <th scope="col">Boîte postale</th>
                  <th scope="col">Ville</th>
                  <th scope="col">Code postal</th>
                  <th scope="col">Pays</th>
                  <th scope="col">Adresse email</th>
                  <th scope="col">Téléphone</th>
                  <th scope="col">N°TVA</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($clients as $client)
                  <tr id="client_id_{{ $client->idClient }}" class="getClientDetail" edit-id="{{$client->idClient}}" >
                    <td scope="row">{{ $client->company}}</td>
                    <td scope="row">{{ $client->contact }}</td>
                    <td scope="row">{{ $client->street }}</td>
                    <td scope="row">{{ $client->number }}</td>
                    <td scope="row">{{ $client->postal_box }}</td>
                    <td scope="row">{{ $client->city }}</td>
                    <td scope="row">{{ $client->postal_code }}</td>
                    <td scope="row">{{ $client->country_name}}</td>
                    <td scope="row">{{ $client->email }}</td>
                    <td scope="row">{{ $client->phone }}</td>
                    <td scope="row">{{ $client->tva }}</td>
                    <td scope="row">
                      <a href="{{ route('clients.edit',$client->idClient) }}">
                        {{--<a href="{{ route('clients.edit', $client->idClient) }}">--}}
                          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          	  viewBox="0 0 348.882 348.882" style="enable-background:new 0 0 348.882 348.882 ;" xml:space="preserve" class="btn-edit-pencil">
                          <g fill="#FF5733">
                          	<path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231
                          		c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685
                          		c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176
                          		C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99
                          		L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386
                          		c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z"/>
                          	<path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904
                          		c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15
                          		s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798
                          		c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z"/>
                          </g>
                        </svg>
                      </a>
                    </td>
                    <td>
                      <a href="javascript:void(0)" data-id="{{ $client->idClient }}" class="delete-client" id="btn-delete-client" width="16px" >
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="408.483px" height="408.483px" viewBox="0 0 408.483 408.483" style="enable-background:new 0 0 408.483 408.483;"
                           xml:space="preserve">
                          <g fill="#f50000">
                            <path d="M87.748,388.784c0.461,11.01,9.521,19.699,20.539,19.699h191.911c11.018,0,20.078-8.689,20.539-19.699l13.705-289.316
                              H74.043L87.748,388.784z M247.655,171.329c0-4.61,3.738-8.349,8.35-8.349h13.355c4.609,0,8.35,3.738,8.35,8.349v165.293
                              c0,4.611-3.738,8.349-8.35,8.349h-13.355c-4.61,0-8.35-3.736-8.35-8.349V171.329z M189.216,171.329
                              c0-4.61,3.738-8.349,8.349-8.349h13.355c4.609,0,8.349,3.738,8.349,8.349v165.293c0,4.611-3.737,8.349-8.349,8.349h-13.355
                              c-4.61,0-8.349-3.736-8.349-8.349V171.329L189.216,171.329z M130.775,171.329c0-4.61,3.738-8.349,8.349-8.349h13.356
                              c4.61,0,8.349,3.738,8.349,8.349v165.293c0,4.611-3.738,8.349-8.349,8.349h-13.356c-4.61,0-8.349-3.736-8.349-8.349V171.329z"/>
                            <path d="M343.567,21.043h-88.535V4.305c0-2.377-1.927-4.305-4.305-4.305h-92.971c-2.377,0-4.304,1.928-4.304,4.305v16.737H64.916
                              c-7.125,0-12.9,5.776-12.9,12.901V74.47h304.451V33.944C356.467,26.819,350.692,21.043,343.567,21.043z"/>
                          </g>
                        </svg>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="pt-2">
              <div class="row justify-content-center pt-2">
                {{ $clients->links() }}
              </div>
            </div>
      </div>
    </div>
  </div>
</div>


@endsection
