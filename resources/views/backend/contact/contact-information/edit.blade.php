@extends('backend.layouts.app')

@section('sub-title')
    Contacto
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-address-card"></i> Editar contacto
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


          <form action="{{ route('admin.contact.update', ['contact' => $contact->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="direction_map" class="form-label">Dirección en mapa
                <span class="span-reqrired">*</span>
                <small class="text-muted"> (Seleccione una dirección en <a href="https://www.google.com.pe/maps">google maps</a>) </small>

              </label>
              <textarea id="direction_map" name="direction_map" type="text" class="form-control" rows="4" tabindex="4" required placeholder="Complete su correo electrónico...">{{$contact->direction_map}}</textarea>
            </div>
            <div class="mb-3">
              <label for="direction" class="form-label">Dirección
                <span class="span-reqrired">*</span>
              </label>
              <input id="direction" name="direction"  type="text" class="form-control" value="{{$contact->direction}}" placeholder="Complete este campo..." autofocus>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Teléfono
                <span class="span-reqrired">*</span>
              </label>
              <input id="phone" name="phone" type="text" class="form-control" value="{{$contact->phone}}" placeholder="Complete este campo..." autofocus>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo electronico
                <span class="span-reqrired">*</span>
              </label>
              <input id="email" name="email" type="text" class="form-control" value="{{$contact->email}}" placeholder="Complete este campo..." autofocus>
            </div>


            <a href="{{ route('admin.contact.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
