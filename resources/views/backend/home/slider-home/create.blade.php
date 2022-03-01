@extends('backend.layouts.app')

@section('title')
  Nuevo slider
@endsection

@section('sub-title')
  Home
@endsection

@section('content')
  <div class="page-content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-images"></i> Agregar Slider
            </h6>
          </div>
          <hr>
            @if (count($errors->all()))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                  @foreach ($errors->all() as $message)
                    <li>{{$message}}</li>
                  @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif


            <form action="{{ route('admin.home-slider.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="mb-3">
                <label for="sub_title" class="form-label">Subtítulo
                  <span class="span-reqrired">*</span>
                </label>
                <input id="sub_title" name="sub_title" id="sub_title" type="text" class="form-control" value="{{ old('sub_title') }}"  placeholder="Complete este campo..." autofocus>
              </div>
              <div class="mb-3">
                <label for="title" class="form-label">Titulo
                  <span class="span-reqrired">*</span>
                </label>
                <input id="title" name="title" id="title" type="text" class="form-control" value="{{ old('title') }}"  placeholder="Complete este campo..." autofocus>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Descripción
                  <span class="span-reqrired">*</span>
                </label>
                <textarea id="description" name="description" type="text" class="form-control" value="" tabindex="2" required placeholder="Complete su correo electrónico..."></textarea>
              </div>
              <div class="mb-3">
                <label for="link_1" class="form-label">Link 1 - Explorar</label>
                <input id="link_1" name="link_1" type="url" class="form-control" value="{{ old('link_1') }}" placeholder="Complete este campo...">
              </div>
              <div class="mb-3">
                <label for="link_2" class="form-label">Link 2</label>
                <input id="link_2" name="link_2" type="url" class="form-control" value="{{ old('link_2') }}" placeholder="Complete este campo...">
              </div>
              <div class="form-group mb-3">
                <label class="mb-0" for="">Imagen del slider</label>
                <input type="file" accept="image/*" class="form-control" name="slider_image" id="slider_image">
              </div>
              <a href="{{ route('admin.home-slider.index') }}" class="btn btn-danger">Cancelar</a>
              <button type="submit" class="btn btn-primary">Guardar <i class="far fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
