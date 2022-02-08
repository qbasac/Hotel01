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
              <i class="fas fa-user-plus"></i> Sobre nosotros
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


            <form action="{{ route('usuario.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Titulo</label>
                <input id="name" name="name" id="name" type="text" class="form-control" value="{{ old('name') }}"  placeholder="Ingrese un titulo..." autofocus>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Descripción</label>
                <input id="name" name="name" id="name" type="text" class="form-control" value="{{ old('name') }}"  placeholder="Ingrese un titulo descripción ..." autofocus>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Link</label>
                <input id="name" name="name" id="name" type="text" class="form-control" value="{{ old('name') }}"  placeholder="Ingrese un link..." autofocus>
              </div>
              <div class="mb-3">
                <label for="nick_name" class="form-label">Imagen 1</label>
                <input id="nick_name" name="nick_name" type="text" class="form-control" value="{{ old('nick_name') }}" placeholder="Imagen 1...">
              </div>
              <div class="mb-3">
                <label for="nick_name" class="form-label">Imagen 2</label>
                <input id="nick_name" name="nick_name" type="text" class="form-control" value="{{ old('nick_name') }}" placeholder="Imagen 2...">
              </div>
              <a href="{{ route('usuario.index') }}" class="btn btn-danger">Cancelar</a>
              <button type="submit" class="btn btn-primary">Guardar <i class="far fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
