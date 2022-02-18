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
               <i class="fas fa-hotel"></i> Registrar una reserva
            </div>
            <hr>

           


            <form action="{{ route('room-reservation.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input id="name" name="name" id="name" type="text" class="form-control" value="{{ old('name') }}"  placeholder="Complete este campo..." autofocus>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input id="email" name="email" id="email" type="text" class="form-control" value="{{ old('email') }}"  placeholder="Complete este campo..." autofocus>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Teléfono </label>
                <input id="phone" name="phone" type="phone" class="form-control" value="{{ old('phone') }}" placeholder="Complete este campo...">
              </div>
              <div class="mb-3">
                <label for="room_name" class="form-label">Habitación</label>
                <input id="room_name" name="room_name" type="text" class="form-control" value="{{ old('room_name') }}" placeholder="Complete este campo...">
              </div>
              <div class="mb-3">
                <label for="date_entry" class="form-label">Fecha de ingreso</label>
                <input id="date_entry" name="date_entry" type="text" class="form-control" value="{{ old('date_entry') }}" placeholder="Complete este campo...">
              </div>
              <div class="mb-3">
                <label for="date_out" class="form-label">Fecha de salida</label>
                <input id="date_out" name="date_out" type="text" class="form-control" value="{{ old('date_out') }}" placeholder="Complete este campo...">
              </div>
              <a href="{{ route('room-reservation.index') }}" class="btn btn-danger">Cancelar</a>
              <button type="submit" class="btn btn-primary">Guardar <i class="far fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
