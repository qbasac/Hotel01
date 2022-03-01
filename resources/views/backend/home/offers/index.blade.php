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
              <i class="fas fa-images"></i> Nuestras ofertas 
            </h6>
            <div>
              <!-- <a href="{{ route('admin.home-slider.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a> -->
              <!-- <form  method="POST" action="{{route('admin.home-slider.ShowSectionSlider', ['slider' => $home->id] )}}" class="d-inline">
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
              </form> -->
            </div>
          </div>
          <hr>
      

          <div class="table-responsive">
            <!-- <table class="table table-sm table-striped mt-4">
              <thead>
                  <tr>
                    <th style="width: 120px;" scope="col">Opciones</th>
                    <th style="width: 90px;" scope="col">Estado</th>
                    <th style="min-inline-size: 120px;">Subtítulo</th>
                    <th style="min-inline-size: 120px;">Título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Link 1 - Explorar</th>
                    <th scope="col">Link 2</th>
                    <th scope="col">Imagen</th>
                  </tr>
              </thead>
              <tbody class="vertical-align-middle">
                @foreach ($slider_homes as $slider_home)
                  <tr>
                    <td style=" text-align: left;vertical-align: middle;">
                      <a href="{{ route('admin.home-slider.edit', ['home_slider' => $slider_home->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>
                      <form action="{{ route('admin.home-slider.destroy',$slider_home->id) }}"  method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form>

                      <form method="POST" action="{{route('admin.home-slider.updateIsActive', ['slider' => $slider_home->id] )}}" class="d-inline">
                        @csrf
                        <input type="hidden" name="state" value="{{$slider_home->is_active}}">
                        @if ($slider_home->is_active)
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
                          @if ($slider_home->is_active)
                          <span style="width: 60px;" class="badge rounded-pill bg-success">{{$slider_home->is_active ? 'Activo' : 'Inactivo'}}
                          @else
                          <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$slider_home->is_active ? 'Activo' : 'Inactivo'}}
                          @endif</span>
                      </td>

                      <td>{{$slider_home->sub_title}}</td>
                      <td>{{$slider_home->title}}</td>
                      <td class="column-description">{{$slider_home->description}}</td>
                      <td>
                        <a href="{{$slider_home->link_1}}" title=" {{$slider_home->link_1}}" target="_blank" rel="noopener noreferrer">
                          Ir al link
                        </a>
                      </td>
                      <td>
                        <a href="{{$slider_home->link_2}}" title=" {{$slider_home->link_2}}" target="_blank" rel="noopener noreferrer">
                        Ir al link
                        </a>
                      </td>
                 
                     </tr>
                @endforeach
              </tbody>
            </table> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
