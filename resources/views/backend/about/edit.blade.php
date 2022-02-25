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
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-user-plus"></i> Sobre nosotros
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


          <form action="{{ route('about.update',['about' => $about->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titulo</label>
              <input id="title" name="title" type="text" class="form-control" value="{{$about->about_title}}" placeholder="Ingrese un titulo...">
            </div>
            <div class="mb-3">
              <label for="description">Descripción</label>
              <textarea id="description" name="description" type="text" class="form-control">{{$about->about_description}}</textarea>
            </div>
            <div class="mb-3">
              <label for="link" class="form-label">Link</label>
              <input id="link" name="link" type="url" class="form-control" value="{{$about->about_link}}" placeholder="Ingrese un link...">
            </div>

            <div class="form-group mb-3">
              <label class="mb-0" for="">Imagen de fondo</label>
              <input type="file" accept="image/*" class="form-control" name="about_image" id="about_image">
            </div>

            <div class="form-group mb-3">
              <label class="mb-0" for="">Imagen frontal</label>
              <input type="file" accept="image/*" class="form-control" name="about_sub_image" id="about_sub_image">
            </div>

            <div class="mb-3">
              <label for="seccion_video_title" class="form-label">Titulo del video</label>
              <input id="seccion_video_title" name="seccion_video_title" type="text" class="form-control" value="{{$about->seccion_video_title}}" placeholder="Ingrese un titulo...">
            </div>
            <div class="mb-3">
              <label for="seccion_video_description">Descripción del video</label>
              <textarea id="seccion_video_description" name="seccion_video_description" type="text" class="form-control">{{$about->seccion_video_description}}</textarea>
            </div>
            <div class="mb-3">
              <label for="seccion_video_link" class="form-label">Link del video</label>
              <input id="seccion_video_link" name="seccion_video_link" type="url" class="form-control" value="{{$about->seccion_video_link}}" placeholder="Ingrese un link...">
            </div>
            <a href="{{ route('about.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar <i class="far fa-paper-plane"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection