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
              <i class="fas fa-hotel me-1"></i> Nuevo
            </h6>
          </div>
          <hr>
          <form action="{{ route('upload-images') }}" method="POST">
            @csrf
            <textarea id="editor" name="title"></textarea>
            <textarea id="editor" name="description"></textarea>

            <input type="submit" value="Send">
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


