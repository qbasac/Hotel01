@extends('backend.layouts.app')

@section('sub-title')
    Habitaciones
@endsection

@section('styles')
  <style>
    .column-options,
    .column-name
    .column-description {
      inline-size: 120px;
      min-inline-size: 120px;
      text-align: center;
    }
    .column-name,
    .column-description {
      text-align: start
    }

    .column-price{
      min-inline-size: 70px

    }

    .column-comment{
      inline-size: 200px;
      max-inline-size: 200px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
    }

    .td-style{
      vertical-align: middle;
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
              <i class="fas fa-book"></i> Comentarios del blog
            </h6>
            <div>
              {{-- <a href="{{ route('admin.blog-comments.create') }}" class="btn btn-primary">Nuevo <i class="fas fa-plus"></i></a> --}}
              {{-- <form  method="POST" action="{{route('admin.room.ShowSectionOffer', ['offers' => $home->id] )}}" class="d-inline">
                @csrf
                <input type="hidden" name="state" value="{{$home->show_section_offers}}">
                @if ($home->show_section_offers)
                <button  type="submit" class="btn btn btn-danger float-end" title="">
                  Ocultar ofertas<i class="fas fa-eye-slash"></i>
                </button>
                @else
                <button  type="submit" class="btn btn btn-success  " title="Cambiar estado">
                  Mostrar ofertas <i class="fas fa-eye"></i>
                </button>
                @endif
              </form> --}}
            </div>
          </div>
          <hr>
          <form class="row justify-content-end" action="{{ route('admin.blog-comments.index') }}" method="GET" autocomplete="off">
            <div class="form-group col-12 col-md-6 col-lg-4">
              <label for="" class="mb-0">Buscar</label>
              <div  class="input-group mb-3">
               <select name="searchBy" id="search-by"  class="form-select form-select cursor-pointer" aria-label=".form-select-sm example">
                 <option value="name" {{ request('searchBy') == 'name' ? 'selected' : '' }}>Nombre</option>
                 <option value="created_at" {{ request('searchBy') == 'created_at' ? 'selected' : '' }}>Fecha de publicación</option>
               </select>
               <select name="orderBy" id="form-created_at"  class="form-select form-select cursor-pointer" aria-label=".form-select-sm example">
                 <option value="asc" {{ request('searchBy') == 'created_at' && request('orderBy') ? 'selected' : '' }} >Antiguas</option>
                 <option value="desc" {{ request('searchBy') == 'created_at' && request('orderBy') ? 'selected' : '' }} >Recientes</option>
               </select>
                <input class="form-control d-none" id="form-name" type="search" placeholder="Nombres..." {{ request('search') ? 'autofocus' : '' }} name="search" aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered mt-4">
              <thead>
                <tr class="vertical-align-middle">
                  <th class="column-options" rowspan="2">Opciones</th>
                  <th class="column-options" rowspan="2">Estado</th>
                  <th class="column-name" rowspan="2">Blog</th>
                  <th class="column-name" rowspan="2">Nombre</th>
                  <th class="column-description" rowspan="2">Email</th>
                  <th scope="col"  class="text-center">Comentario</th>
                  <th scope="col" class="text-center">Creado</th>
                </tr>
              </thead>
              <tbody class="td-style">
                @foreach ($blog_comments as $blog_comment)
                  <tr class="vertical-align-middle">
                    <td class="column-options td-style">
                      <form action="{{ route('admin.blog-comments.destroy',$blog_comment->id) }}" method="POST" class="d-inline form-delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form>
                      <form method="POST" action="{{route('admin.blog-comments.updateIsActive', ['comments' => $blog_comment->id] )}}" class="d-inline">
                          @csrf
                          <input type="hidden" name="state" value="{{$blog_comment->is_active}}">
                          @if ($blog_comment->is_active)
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
                    </td>
                    <td class="td-style column-options">
                      <span style="width: 60px;" class="badge rounded-pill
                      {{ $blog_comment->is_active ? 'bg-success' : 'bg-danger' }}">{{$blog_comment->is_active ? 'Activo' : 'Inactivo'}}
                    </td>

                    <td class="td-style"> {{ $blog_comment->blog->title ?? '-' }} </td>
                    <td class="td-style"> {{ $blog_comment->name}} </td>
                    <td class="td-style"> {{ $blog_comment->email }}</td>
                    <td class="td-style column-comment"> {{ $blog_comment->comment }}</td>
                    <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($blog_comment->created_at)->format('d-m-Y')}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {{ $blog_comments->links() }}
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
    const listFormInputs = ['form-name', 'form-created_at']
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

