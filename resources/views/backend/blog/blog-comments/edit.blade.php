@extends('backend.layouts.app')

@section('sub-title')
Habitaciones
@endsection


@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-hotel me-1"></i> Editar comentario
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

        <form action="{{ route('admin.blog-comments.update', ['blog_comment' => $blog_comments->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
          @method('PUT')
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nombre
              <span class="span-reqrired">*</span>
            </label>
            <input id="name" name="name" id="name" type="text" class="form-control" value="{{$blog_comments->name}}" placeholder="Complete este campo..." autofocus>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo
              <span class="span-reqrired">*</span>
            </label>
            <input id="email" name="email" id="email" type="text" class="form-control" value="{{$blog_comments->email}}" placeholder="Complete este campo..." autofocus>
          </div>
          <div class="mb-3">
            <label for="comment" class="form-label">Comentario
              <span class="span-reqrired">*</span>
            </label>
            <textarea id="comment" name="comment" type="text" class="form-control" value="" tabindex="2" required placeholder="Complete su correo electrónico...">{{$blog_comments->comment}}</textarea>
          </div>
          <a href="{{ route('admin.blog-comments.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
          <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection


