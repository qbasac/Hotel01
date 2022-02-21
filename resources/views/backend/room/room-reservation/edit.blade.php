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
        <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-hotel me-1"></i> Editar datos de la reserva
            </h6>
          </div>
          <hr>
          <form action="{{ route('room-reservation.update', ['room_reservation' => $room_reservation->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
            @method('PUT')
                 @csrf
                 <div class="mb-3">
                  <label for="name" class="form-label">Nombre</label>
                  <input id="name" name="name" id="name" type="text" class="form-control" value="{{$room_reservation->name}}"  placeholder="Complete este campo..." autofocus>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Correo</label>
                  <input id="email" name="email" id="email" type="text" class="form-control" value="{{$room_reservation->email}}"  placeholder="Complete este campo..." autofocus>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Teléfono </label>
                  <input id="phone" name="phone" type="phone" class="form-control" value="{{$room_reservation->phone}}" placeholder="Complete este campo...">
                </div>
                <div class="mb-3">
                  <label for="room_type" class="form-label">Habitación</label>
                  <input id="room_type" name="room_type" type="text" class="form-control" value="{{$room_reservation->room_type}}" placeholder="Complete este campo...">
                </div>
                <div class="mb-3">
                  <label for="quantity_adults" class="form-label">Adultos</label>
                  <input id="quantity_adults" name="quantity_adults" type="text" class="form-control" value="{{$room_reservation->quantity_adults}}" placeholder="Complete este campo...">
                </div>
                <div class="mb-3">
                  <label for="quantity_childrens" class="form-label">Niños</label>
                  <input id="quantity_childrens" name="quantity_childrens" type="text" class="form-control" value="{{$room_reservation->quantity_childrens}}" placeholder="Complete este campo...">
                </div>
                <div class="mb-3">
                  <label for="reservation_start_date" class="form-label">Fecha de ingreso</label>
                  <input id="reservation_start_date" name="reservation_start_date" type="text" class="form-control" value="{{$room_reservation->reservation_start_date}}" placeholder="Complete este campo...">
                </div>
                <div class="mb-3">
                  <label for="reservation_end_date" class="form-label">Fecha de salida</label>
                  <input id="reservation_end_date" name="reservation_end_date" type="text" class="form-control" value="{{$room_reservation->reservation_end_date}}" placeholder="Complete este campo...">
                </div>
            <a href="{{ route('room-reservation.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
