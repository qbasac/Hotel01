@extends('backend.layouts.app')

@section('title')
  Nuevo blog
@endsection

@section('sub-title')
  Blog
@endsection

@section('styles')
  <style>
    .column-description {
      inline-size: 300px;
      max-inline-size: 200px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
    }
  </style>

@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-book"></i> Blog
            </h6>
            <div>
              <a href="{{ route('admin.blog.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a>
            </div>
          </div>
          <hr>
          <div class="table-responsive">
            <table class="table table-sm table-striped mt-4">
              <thead>
                <tr>
                  <th style="width: 120px;" scope="col">Opciones</th>
                  <th style="width: 90px;" scope="col">Estado</th>
                  <th scope="col">Título</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Likes</th>
                  <th scope="col">Imagen</th>
                  <th scope="col">Creado</th>
                </tr>
              </thead>
              <tbody style="vertical-align: middle;">
                @foreach ($blogs as $blog)
                <tr>
                  <td style=" text-align: left;vertical-align: middle;">
                    <a href="{{ route('admin.blog.edit', ['blog' => $blog->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>
                    <form action="{{ route('admin.blog.destroy',$blog->id) }}"  method="POST" class="d-inline form-delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>

                    <form method="POST" action="{{route('admin.blog.updateIsActive', ['blog' => $blog->id] )}}" class="d-inline">
                      @csrf
                      <input type="hidden" name="state" value="{{$blog->is_active}}">
                      @if ($blog->is_active)
                        <button type="submit"
                          class="btn btn-sm btn-success"
                          title="Cambiar estado">
                          <i class="far fa-check-circle"></i>
                        </button>
                      @else
                        <button type="submit"
                          class="btn btn-sm btn-danger"
                          title="Cambiar estado">
                          <i class="far fa-times-circle"></i>
                        </button>
                      @endif
                    </form>

                    <td style="vertical-align: middle;">
                        @if ($blog->is_active)
                        <span style="width: 60px;" class="badge rounded-pill bg-success">{{$blog->is_active ? 'Activo' : 'Inactivo'}}
                        @else
                        <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$blog->is_active ? 'Activo' : 'Inactivo'}}
                        @endif</span>
                    </td>

                    <td>{{$blog->title}}</td>
                    <td class="column-description">{{$blog->description}}</td>
                    <td>{{$blog->name_author}}</td>
                    <td>{{$blog->like}}</td>
                    <td>
                        <img src="{{ asset('storage/blog-image/'.$blog->image) }}"  width="60" height="30">
                    </td>
                    <td>{{$blog->created_at}}</td>
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

  @if (session('deleted') == 'Eliminado satisfactoriamente')
    <script>
      Swal.fire({
            icon: 'success',
            title: 'Eliminado!',

            html: `
            Se ha eliminado con exito
            `,
            confirmButtonText: 'Aceptar'
          })
    </script>
  @endif

  <script>
    $('.form-delete').submit(function(e){
      e.preventDefault()

      Swal.fire({
      title: '¿Estas seguro?',
      text: "Se eliminará definitivamente!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, Eliminar!',
      cancelButtonText: 'Cancelar'

      }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
      })
    })

  </script>
@endsection

