@extends('backend.layouts.app')

@section('sub-title')
  Habitaciones
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title text-primary">
            <i class="fas fa-hotel"></i> Reserva habitaciones
            {{-- <a href="{{ route('room-reservation.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a> --}}
          </div>

          <hr>
          <br>

          <div class="table-responsive">
            <table class="table table-sm table-striped mt-4">
              <thead>
                  <tr>
                    <th style="width: 120px;" scope="col">Opciones</th>
                    <th style="width: 90px;" scope="col">Estado</th>
                    <th style="min-inline-size: 120px;">Nombre</th>
                    <th style="min-inline-size: 120px;">Email</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Habitacion</th>
                    <th scope="col">Adultos</th>
                    <th scope="col">Niños</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Fecha de salida</th>
                  </tr>
              </thead>
              <tbody>

              @foreach ($room_reservations as $room_reservation)
                  <tr>
                    <td style=" text-align: left;vertical-align: middle;">
                      <a href="{{ route('room-reservation.edit', ['room_reservation' => $room_reservation->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>
                      <form action="{{ route('room-reservation.destroy',$room_reservation->id) }}"  method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form>

                      <form method="POST" action="{{route('reservation.updateIsActive', ['room_reservation' => $room_reservation->id] )}}" class="d-inline">
                          @csrf
                          <input type="hidden" name="state" value="{{$room_reservation->is_active}}">
                          @if ($room_reservation->is_active)
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
                          @if ($room_reservation->is_active)
                          <span style="width: 60px;" class="badge rounded-pill bg-success">{{$room_reservation->is_active ? 'Activo' : 'Inactivo'}}
                          @else
                          <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$room_reservation->is_active ? 'Activo' : 'Inactivo'}}
                          @endif</span>
                      </td>

                      <td style="vertical-align: middle;">{{$room_reservation->name}}</td>
                      <td style="vertical-align: middle;">{{$room_reservation->email}}</td>
                      <td style="vertical-align: middle;">{{$room_reservation->phone}}</td>
                      <td style="vertical-align: middle;">{{$room_reservation->room_type}}</td>
                      <td style="vertical-align: middle;">{{$room_reservation->quantity_adults}}</td>
                      <td style="vertical-align: middle;">{{$room_reservation->quantity_childrens}}</td>
                      <td style="vertical-align: middle;">{{$room_reservation->reservation_start_date}}</td>
                      <td style="vertical-align: middle;">{{$room_reservation->reservation_end_date}}</td>

                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {{ $room_reservations->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
