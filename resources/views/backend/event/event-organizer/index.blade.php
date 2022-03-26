@extends('backend.layouts.app')

@section('title')
Inicio
@endsection

@section('sub-title')
Inicio
@endsection

@section('styles')
  <style>
    .column-description {
      inline-size: 200px;
      max-inline-size: 200px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
    }

    .vertical-align-middle > td {
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
              <i class="fa fa-solid fa-user"></i> Organizadores de eventos
            </h6>
            <div>
              <a href="{{ route('admin.event-organizer.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a>
              {{-- <form  method="POST" action="{{route('admin.home-slider.ShowSectionSlider', ['slider' => $home->id] )}}" class="d-inline">
                @csrf
                <input type="hidden" name="state" value="{{$home->show_section_slider}}">
                @if ($home->show_section_slider)
                <button style="margin-right: 5px;"  type="submit" class="btn btn btn-danger float-end" title="">
                  Ocultar Slider <i class="fas fa-eye-slash"></i>
                </button>
                @else
                <button style="margin-right: 5px;" type="submit" class="btn btn btn-success " title="Cambiar estado">
                  Mostrar Slider <i class="fas fa-eye"></i>
                </button>
                @endif
              </form> --}}
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

          <div class="table-responsive">
            <table class="table table-sm table-striped mt-4">
              <thead>
                  <tr>
                    <th style="width: 120px;" scope="col">Opciones</th>
                    <th style="width: 90px;" scope="col">Estado</th>
                    <th style="min-inline-size: 120px;">Nombre</th>
                    <th style="min-inline-size: 120px;">Ocupación</th>
                    <th style="min-inline-size: 120px;">Descripción</th>
                    <th scope="col">Imagen</th>
                  </tr>
              </thead>
              <tbody class="vertical-align-middle">
                 @foreach ($organizers as $organizer)
                  <tr style="vertical-align: middle">
                    <td>
                      <a href="{{ route('admin.event-organizer.edit', ['event_organizer' => $organizer->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>
                      <form action="{{ route('admin.event-organizer.destroy',$organizer->id) }}"  method="POST" class="d-inline form-delete">
                          @csrf
                          @method('DELETE')
                          <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form>

                      <form method="POST" action="{{route('admin.organizer.updateIsActive', ['organizer' => $organizer->id] )}}" class="d-inline">
                        @csrf
                        <input type="hidden" name="state" value="{{$organizer->is_active}}">
                        @if ($organizer->is_active)
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

                      <td>
                          @if ($organizer->is_active)
                          <span style="width: 60px;" class="badge rounded-pill bg-success">{{$organizer->is_active ? 'Activo' : 'Inactivo'}}
                          @else
                          <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$organizer->is_active ? 'Activo' : 'Inactivo'}}
                          @endif</span>
                      </td>

                      <td>{{$organizer->name}}</td>
                      <td>{{$organizer->occupation}}</td>
                      <td>{{$organizer->description}}</td>
                      <td>
                        @if ($organizer->image)
                          <img src="{{ asset('storage/event-organizer-image/'.$organizer->image) }}" class="rounded-circle" width="30" height="30">
                        @else
                          <img src="{{ asset('assets/image-slider/image-slider-default.png') }}" class="rounded-circle" width="30" height="30">
                        @endif
                      </td>
                     </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {{ $organizers->links() }}
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
@if (session('deleted') == 'Eliminado')
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
