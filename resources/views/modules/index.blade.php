{{--
      resources/views/modules/index.blade.php
      Variables disponibles :
        $modules Array (OBJ ( id, title, price, description, category ))
 --}}

@extends('layouts.app')
@section('content')
<div class="content-container">
  <div class="container-fluid p-5 bg-light">
    <div class="p-5 bg-white">
      <h1>Modules</h1>
      <div class="">
        <button type="submit" id="btnAddModule" class="btn-create btn-lg">
            {{ __('Créer') }}
        </button>
      </div>
      <div class="p-5" id="listModuleAdd">
        <div class="list-group list-group-flush list-unstyled">
          @foreach ($modules as $module)
          <div class="moduleEditable list-group-item pb-4" id="form_{{$module->id}}"  data-id="{{$module->id}}">
            <div id="moduleDraggable">
              <div class="editable d-flex justify-content-around">
                {{-- <img src="img/square_grey.png" style="width:35px;height:35px" alt=""> --}}
                {{-- <img src="img/more.png" style="width:35px;height:35px" alt=""> --}}
                <div class="pl-4" value="{{ $module->title }}">
                  <h2 class="title" class="h2 font-weight-bold" contenteditable="true" data-update-ajax="true">{{ $module->title }}</h2>
                </div>
                <div class="divSize font-pdf-2-vue font-weight-bold pl-5 pt-2" value="{{ $module->price }}">
                  <p class="price">
                    <span contenteditable="true" data-update-ajax="true" class="price-number ">{{ $module->price }}</span>
                    €</p>

                </div>
                <div>
                  <a href="javascript:void(0)" data-id="{{ $module->id }}" class="delete-module" id="btn-delete-module" width="16px" >
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
                </div>

              </div>
              <hr class="hr-pdf-vue">
              <div class="d-flex pl-3 pr-3 flex-grow-1">
                <select contenteditable="true" data-update-ajax="true" class="form-control  options-select w-100">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{$module->category_id === $category->id ? "selected" : ''}}>
                      {{$category->name}}</option>
                  @endforeach
                </select>
                  </div>
              <div class="editable d-flex pl-3 mt-3 mb-3 w-100">
                <p contenteditable="true" data-update-ajax="true" class="description" value="{{ $module->description }}">{{ $module->description }}</p>
              </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
