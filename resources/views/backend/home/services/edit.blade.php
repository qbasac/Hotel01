@extends('backend.layouts.app')

@section('sub-title')
    Servicios
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-hotel me-1"></i> Editar
            </h6>

          </div>
          <hr>
          <form action="{{ route('admin.services.update', ['service' => $service->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
           @method('PUT')
           @csrf
           <div class="mb-3">
            <label for="title" class="form-label">Título
              <span class="span-reqrired">*</span>
            </label>
            <input id="title" name="title" id="title" type="text" class="form-control" value="{{$service->title}}" placeholder="Complete este campo..." autofocus>
           </div>
           <div class="form-group mb-3">
            <label class="mb-0" for="">Imagen
              <span class="span-reqrired">*</span>
            </label>
            <input type="file" accept="image/*" class="form-control" name="image" id="image">
          </div>
            <textarea id="editor" name="description">{{$service->description}}</textarea>

            <br>
            <a href="{{ route('admin.services.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
            <button type="submit" value="Send" class="btn btn-primary" tabindex="3">Actualizar</button>
          </form>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('backend/ckeditor5-classic/ckeditor.js') }}"></script>
  <script src="{{ asset('backend/ckeditor5-classic/translations/es.js') }}"></script>

  <script>
    const $editor = document.querySelector('#editor')
    const config = {
      toolbar: [ 'heading', '|', 'link', 'bulletedList', 'insertTable'],
      language: 'es',
      heading: {
        options: [
          { model: 'paragraph', title: 'Parráfo', class: 'ck-heading_paragraph' },
          { model: 'heading1', view: 'h1', title: 'Título', class: 'ck-heading_heading1' },
          { model: 'heading2', view: 'h2', title: 'Sub titulo', class: 'ck-heading_heading2' }
        ]
      },
    }

    ClassicEditor
      .create($editor, config)
      .then( editor => {
          console.log( editor );
      } )
      .catch( error => {
          console.error( error );
      });
  </script>
@endsection

