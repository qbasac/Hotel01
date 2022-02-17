@extends('backend.layouts.app')

@section('title')
  Nuevo Usuario
@endsection

@section('sub-title')
  Usuarios
@endsection

@section('content')
  <div class="page-content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title text-primary">
              <i class="fas fa-user-plus"></i> Nuevo usuario
            </div>
            <hr>

            {{-- @if (count($errors->all()))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                  @foreach ($errors->all() as $message)
                    <li>{{$message}}</li>
                  @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif --}}


            <form action="{{ route('admin.room.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input id="name" name="name" id="name" type="text" class="form-control" value="{{ old('name') }}"  placeholder="Complete este campo..." autofocus>
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input id="price" name="price" id="price" type="text" class="form-control" value="{{ old('price') }}"  placeholder="Complete este campo..." autofocus>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Descripción </label>
                <input id="description" name="description" type="description" class="form-control" value="{{ old('description') }}" placeholder="Complete este campo...">
              </div>
              <div class="mb-3">
                <label for="beds" class="form-label">Cantidad de camas</label>
                <input id="beds" name="beds" type="text" class="form-control" value="{{ old('number_beds') }}" placeholder="Complete este campo...">
              </div>
              <div class="mb-3">
                <label for="people" class="form-label">Cantidad de personas</label>
                <input id="people" name="people" type="text" class="form-control" value="{{ old('number_people') }}" placeholder="Complete este campo...">
              </div>
              <div class="form-group mb-3">
                <label class="mb-0" for="">Imagen de fondo</label>
                <input type="file" accept="image/*" class="form-control" name="image" id="image">
              </div>
              <a href="{{ route('admin.room.index') }}" class="btn btn-danger">Cancelar</a>
              <button type="submit" class="btn btn-primary">Guardar <i class="far fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
