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
              <i class="fas fa-user-plus"></i> Nuevo Comentario
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


            <form action="{{ route('testimonial.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input id="name" name="name" id="name" type="text" class="form-control" value="{{ old('section_testimonial_name') }}"  placeholder="Complete su nombre..." autofocus>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Comentario</label>
                <textarea id="comment" name="comment" type="text" class="form-control" value="{{ old('section_testimonial_comment') }}" placeholder="Complete su comentario..."></textarea>
              </div>
              <div class="mb-3">
                <label for="nick_name" class="form-label">Calificación</label>
                <input id="rating" name="rating" type="number" class="form-control" value="{{ old('section_testimonial_rating') }}" placeholder="Califica...">
              </div>
              <div class="mb-3">
                <label for="rating" class="form-label">Género</label>
                <select name="gender" id="gender" class="form-select" value="">
                  <option value="">Seleccione</option>
                  <option value="0">Varón</option>
                  <option value="1">Mujer</option>
                </select>
              </div>
              <a href="{{ route('testimonial.index') }}" class="btn btn-danger">Cancelar</a>
              <button type="submit" class="btn btn-primary">Guardar <i class="far fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
