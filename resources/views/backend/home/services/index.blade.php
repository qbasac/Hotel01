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
               <i class="fas fa-bed"></i> Nuestros servicios
            </h6>
            <div>
              <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Nuevo <i class="fas fa-plus"></i></a>
            </div>
          </div>
          <hr>
          <div class="table-responsive">
            <table class="table table-sm table-striped mt-4">
              <thead>
                  <tr>
                    <th style="width: 120px;" scope="col">Opciones</th>
                    <th style="width: 90px;" scope="col">Estado</th>
                    <th scope="col">Descripción</th>
                  </tr>
              </thead>
              <tbody class="vertical-align-middle">
                @foreach ($services as $service)
                  <tr>
                  <td style=" text-align: left;vertical-align: middle;">
                   <a href="{{ route('admin.services.edit', ['service' => $service->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>

                  </td>
                      <td style="vertical-align: middle;">
                          @if ($service->is_active)
                          <span style="width: 60px;" class="badge rounded-pill bg-success">{{$service->is_active ? 'Activo' : 'Inactivo'}}
                          @else
                          <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$service->is_active ? 'Activo' : 'Inactivo'}}
                          @endif</span>
                      </td>
                      <td class="column-description">{{$service->description}}</td>     
                     </tr>
                @endforeach
              </tbody>
            </table>
          </div>

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


