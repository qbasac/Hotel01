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
              <form  method="POST" action="{{route('admin.blog.ShowSectionBlog', ['blog' => $home->id] )}}" class="d-inline">
                @csrf
                <input type="hidden" name="state" value="{{$home->show_section_blog}}">
                @if ($home->show_section_blog)
                <button type="submit" class="btn btn btn-danger float-end me-2" title="">
                  Ocultar <i class="fas fa-eye-slash"></i>
                </button>
                @else
                <button type="submit" class="btn btn btn-success me-2" title="Cambiar estado">
                  Mostrar <i class="fas fa-eye"></i>
                </button>
                @endif
              </form>
            </div>
          </div>
          <hr>
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
          </svg>
          @if (session('created'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if (session('updated'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('updated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <form class="row justify-content-end" action="{{ route('admin.blog.index') }}" method="GET" autocomplete="off">
            <div class="form-group col-12 col-md-6 col-lg-4">
              <label for="" class="mb-0">Buscar</label>
              <div  class="input-group mb-3">
               <select name="searchBy" id="search-by"  class="form-select form-select cursor-pointer" aria-label=".form-select-sm example">
                 <option value="title" {{ request('searchBy') == 'title' ? 'selected' : '' }}>Título</option>
                 <option value="created_at" {{ request('searchBy') == 'created_at' ? 'selected' : '' }}>Fecha de publicación</option>
               </select>
               <select name="orderBy" id="form-created_at"  class="form-select form-select cursor-pointer" aria-label=".form-select-sm example">
                 <option value="asc" {{ request('searchBy') == 'created_at' && request('orderBy') ? 'selected' : '' }} >Antiguas</option>
                 <option value="desc" {{ request('searchBy') == 'created_at' && request('orderBy') ? 'selected' : '' }} >Recientes</option>
               </select>
                <input class="form-control d-none" id="form-title" type="search" placeholder="Nombres..." {{ request('search') ? 'autofocus' : '' }} name="search" aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table table-sm table-striped mt-4">
              <thead>
                <tr>
                  <th style="width: 120px;" scope="col">Opciones</th>
                  <th style="width: 90px;" scope="col">Estado</th>
                  <th scope="col">Título</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Autor</th>
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
        {{ $blogs->links() }}
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

  <script>
    const listFormInputs = ['form-title', 'form-created_at']
    const $searchBy = document.getElementById('search-by')

    $searchBy.onchange = setClassDiplayNone

    function setClassDiplayNone() {
      const listInputs = listFormInputs.map(item => document.getElementById(item))
        .forEach($input => {
          const method = $input.id == `form-${$searchBy.value}` ? 'remove' : 'add'
          $input.classList[method]('d-none')
        })
    }
    setClassDiplayNone()
  </script>
@endsection

