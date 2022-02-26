@extends('backend.layouts.app')

@section('title')
Inicio
@endsection

@section('sub-title')
Inicio
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-images"></i> Carrucel de imagenes
            </h6>
          </div>
          <hr>
          <div class="table-responsive">
            <table class="table table-sm table-striped mt-4">
              <thead>
                  <tr>
                    <th style="width: 120px;" scope="col">Opciones</th>
                    <th style="width: 90px;" scope="col">Estado</th>
                    <th style="min-inline-size: 120px;">Subtítulo</th>
                    <th style="min-inline-size: 120px;">Título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Link 1</th>
                    <th scope="col">Link 2</th>
                    <th scope="col">Imagen</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($slider_homes as $slider_home)
                  {{-- <tr>
                    <td style=" text-align: left;vertical-align: middle;">
                      <a href="{{ route('admin.room.edit', ['room' => $room->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>
                      <form action="{{ route('admin.room.destroy',$room->id) }}"  method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form>

                      <form method="POST" action="{{route('admin.room.updateIsActive', ['room' => $room->id] )}}" class="d-inline">
                          @csrf
                          <input type="hidden" name="state" value="{{$room->is_active}}">
                          @if ($room->is_active)
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
                          @if ($room->is_active)
                          <span style="width: 60px;" class="badge rounded-pill bg-success">{{$room->is_active ? 'Activo' : 'Inactivo'}}
                          @else
                          <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$room->is_active ? 'Activo' : 'Inactivo'}}
                          @endif</span>
                      </td> --}}

                      <td style="vertical-align: middle;">{{--$slider_home->description--}}</td>
                      <td style="vertical-align: middle;">{{--$room->description--}}</td>
                      <td style="vertical-align: middle;">{{$slider_home->sub_title}}</td>
                      <td style="vertical-align: middle;">{{$slider_home->title}}</td>
                      <td style="vertical-align: middle;">{{$slider_home->description}}</td>
                      <td style="vertical-align: middle;">{{$slider_home->link_1}}</td>
                      <td style="vertical-align: middle;">{{--$slider_home->link_2--}}</td>
                      <td style="vertical-align: middle;">
                        @if ($slider_home->image)
                          <img src="{{ asset('storage/slider-image/'.$slider_home->slider_image) }}" class="rounded-circle" width="30" height="30">
                        @else
                          <img src="{{ asset('assets/users/avatar-default.png') }}" class="rounded-circle" width="30" height="30">
                        @endif
                      </td>
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
