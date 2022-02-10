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
              <i class="fas fa-comment"></i> Testimonios
            </div>
            <hr>
            {{-- <a href="{{ route('testimonial.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a> --}}
            <div  class="table-responsive">
              <table class="table table-sm table-striped mt-4">
                <thead>
                    <tr>
                      <th style="width: 130px;" scope="col">Opciones</th>
                      <th style="width: 100px;" scope="col">Estado</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Comentario</th>
                      <th scope="col">Calificación</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($testimonials as $testimonial)
                    <tr>
                      <td style=" text-align: left;vertical-align: middle;">
                        <a href="{{ route('testimonial.edit', ['testimonial' => $testimonial->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>
                        <form action="{{ route('testimonial.destroy',$testimonial->id) }}"  method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>

                        <form method="POST" action="{{route('testimonial.updateIsActive', ['testimonial' => $testimonial->id] )}}" class="d-inline">
                            @csrf
                            <input type="hidden" name="state" value="{{$testimonial->seccion_testimonial_is_active}}">
                            @if ($testimonial->seccion_testimonial_is_active)
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
                        <td style="vertical-align: middle;">
                            @if ($testimonial->seccion_testimonial_is_active)
                            <span style="width: 60px;" class="badge rounded-pill bg-success">{{$testimonial->seccion_testimonial_is_active ? 'Activo' : 'Inactivo'}}
                            @else
                            <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$testimonial->seccion_testimonial_is_active ? 'Activo' : 'Inactivo'}}
                            @endif</span>
                        </td>

                        <td style="vertical-align: middle;">{{$testimonial->section_testimonial_name}}</td>
                        <td style="vertical-align: middle;">{{$testimonial->section_testimonial_comment}}</td>
                        <td style="vertical-align: middle;">{{$testimonial->section_testimonial_rating}}</td>

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
