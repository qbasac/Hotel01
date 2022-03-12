@extends('backend.layouts.app')

@section('sub-title')
    Blog
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-book"></i> Editar blog
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


          <form action="{{ route('admin.blog.update', ['blog' => $blog->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Título
                <span class="span-reqrired">*</span>
              </label>
              <input id="title" name="title" id="title" type="text" class="form-control" value="{{$blog->title}}" placeholder="Complete este campo..." autofocus>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Descripción
                <span class="span-reqrired">*</span>
              </label>
              <textarea id="description" name="description" type="text" class="form-control" value="" tabindex="2" required placeholder="Complete su correo electrónico...">{{$blog->description}}</textarea>
            </div>
            <div class="mb-3">
              <label for="name_author" class="form-label">Autor</label>
              <input id="name_author" name="name_author" type="text" class="form-control" value="{{$blog->name_author}}" placeholder="Complete este campo...">
            </div>
            <div class="form-group mb-3">
              <label class="mb-0" for="">Imagen</label>
              <input type="file" accept="image/*" class="form-control" name="image" id="image">
            </div>
            <a href="{{ route('admin.blog.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
