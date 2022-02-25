@extends('backend.layouts.app')

@section('title')
Inicio
@endsection

@section('sub-title')
Inicio
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-user-plus"></i> Inicio
            </h6>
          </div>
          <hr>
          hjj
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

          {{-- <form action="" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titulo</label>
              <input id="title" name="title" id="title" type="text" class="form-control" readonly value="{{$about->about_title}}">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Descripción</label>
              <textarea id="description" name="description" id="description" type="text" class="form-control" readonly value="">{{$about->about_description}}</textarea>
            </div>
            <div class="mb-3">
              <label for="link" class="form-label">Link</label>
              <input id="link" name="link" id="link" type="text" class="form-control" readonly value="{{$about->about_link}}">
            </div>
            <div class="mb-3">
              <label for="about_sub_image" class="form-label">Imagen de fondo</label>
              <input id="about_image" name="about_image" type="text" class="form-control" readonly value="{{$about->about_image}}">
            </div>
            <div class="mb-3">
              <label for="about_sub_image" class="form-label">Imagen frontal</label>
              <input id="about_sub_image" name="about_sub_image" type="text" class="form-control" readonly value="{{$about->about_sub_image}}">
            </div>
            <div class="mb-3">
              <label for="seccion_video_title" class="form-label">Titulo del video</label>
              <input id="seccion_video_title" name="seccion_video_title" type="text" class="form-control" readonly value="{{$about->seccion_video_title}}" placeholder="Ingrese un titulo...">
            </div>
            <div class="mb-3">
              <label for="seccion_video_description">Descripción del video</label>
              <textarea id="seccion_video_description" name="seccion_video_description" type="text" readonly class="form-control">{{$about->seccion_video_description}}</textarea>
            </div>
            <div class="mb-3">
              <label for="seccion_video_link" class="form-label">Link del video</label>
              <input id="seccion_video_link" name="seccion_video_link" type="url" class="form-control" readonly value="{{$about->seccion_video_link}}" placeholder="Ingrese un link...">
            </div>
            <a href="{{ route('about.edit',['about' => $about->id]) }}" class="btn btn btn-info" title="Editar"> Editar <i class="far fa-edit"></i></a>
          </form> --}}


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
