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

            <form action="" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="mb-3">
                <label for="title" class="form-label">Titulo</label>
                <input id="title" name="title" id="title" type="text" class="form-control" readonly value="{{$about->about_title}}">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea id="description" name="description" id="description" type="text" class="form-control"readonly  value="">{{$about->about_description}}</textarea>
              </div>
              <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input id="link" name="link" id="link" type="text" class="form-control"readonly  value="{{$about->about_link}}">
              </div>
              <div class="mb-3">
                <label for="about_imagen" class="form-label">Imagen 1</label>
                <img src="{{ asset('storage/about/'.$about->about_imagen)}}" alt="oscarthemes"/>
                <div class="mb-3">
                <label for="about_sub_imagen" class="form-label">Imagen 2</label>
                <input id="about_sub_imagen" name="about_sub_imagen" type="text" class="form-control" readonly value="{{$about->about_sub_imagen}}" >
              {{-- {{ route('usuario.edit', ['usuario' => $user->id] ) }} --}}
              <a href="{{ route('about.edit',['about' => $about->id]) }}" class="btn btn btn-info" title="Editar"> Editar <i class="far fa-edit"></i></a>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
