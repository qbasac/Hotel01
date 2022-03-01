@extends('backend.layouts.app')

@section('sub-title')
    Home slider
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-percent"></i> Editar oferta
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


          <form action="{{ route('admin.home-offers.update', ['home_offer' => $offer->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Título
                <span class="span-reqrired">*</span>
              </label>
              <input id="title" name="title" id="title" type="text" class="form-control" value="{{$offer->title}}" placeholder="Complete este campo..." autofocus>
            </div>
            <div class="mb-3">
              <label for="discount_percentage" class="form-label">Porcentaje del descuento
                <span class="span-reqrired">*</span>
              </label>
              <input id="discount_percentage" name="discount_percentage" id="discount_percentage" type="text" class="form-control" value="{{$offer->discount_percentage}}" placeholder="Complete este campo..." autofocus>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Descripción
                <span class="span-reqrired">*</span>
              </label>
              <textarea id="description" name="description" type="text" class="form-control" value="" tabindex="2" required placeholder="Complete su correo electrónico...">{{$offer->description}}</textarea>
            </div>
            <div class="form-group mb-3">
              <label class="mb-0" for="">Imagen de fondo de la oferta
                <small class="text-muted"> (Tamaño de imagen recomendado 369px x 202px) </small>
              </label>
              <input type="file" accept="image/*" class="form-control" name="offer_image" id="offer_image">
            </div>
            <a href="{{ route('admin.home-offers.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
