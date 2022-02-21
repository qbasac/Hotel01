@extends('backend.layouts.app')

@section('sub-title')
    Usuarios
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-comment"></i> Editar testimonio
            </h6>
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


          <form action="{{ route('testimonial.update', ['testimonial' => $testimonial->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
            @method('PUT')
                 @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input id="name" name="name" id="name" type="text" class="form-control" value="{{$testimonial->section_testimonial_name}}" autofocus tabindex="1" required placeholder="Complete su nombre...">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Comentario</label>
              <textarea id="comment" name="comment" type="text" class="form-control" value="" tabindex="2" required placeholder="Complete su correo electrónico...">{{$testimonial->section_testimonial_comment}}</textarea>
            </div>
            <div class="mb-3">
              <label for="rating" class="form-label">Calificación</label>
              <input id="rating" name="rating" type="text" class="form-control" value="{{$testimonial->section_testimonial_rating}}" tabindex="2" placeholder="Complete su apodo...">
            </div>
            <div class="mb-3">
              <label for="rating" class="form-label">Género</label>
              <select name="gender" id="" class="form-select" value="{{$testimonial->section_testimonial_gender}}">
                <option value="{{$testimonial->section_testimonial_gender}}">Seleccione</option>
                <option value="0">Varón</option>
                <option value="1">Mujer</option>
              </select>
            </div>
            <a href="{{ route('usuario.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
