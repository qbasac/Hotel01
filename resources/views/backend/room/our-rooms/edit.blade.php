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
              <i class="fas fa-hotel me-1"></i> Editar datos de la habitación
            </h6>
          </div>
          <hr>
          {{-- @if (count($errors->all()))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <ul class="mb-0">
                @foreach ($errors->all() as $message)
                  <li>{{$message}}</li>
           @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif --}}


        <form action="{{ route('admin.room.update', ['room' => $room->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
          @method('PUT')
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input id="name" name="name" id="name" type="text" class="form-control" value="{{$room->name}}" placeholder="Complete este campo..." autofocus>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input id="price" name="price" id="price" type="text" class="form-control" value="{{$room->price}}" placeholder="Complete este campo..." autofocus>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descripción </label>
            <input id="description" name="description" type="description" class="form-control" value="{{$room->description}}" placeholder="Complete este campo...">
          </div>
          <div class="mb-3">
            <label for="beds" class="form-label">Cantidad de camas</label>
            <input id="beds" name="beds" type="text" class="form-control" value="{{$room->number_beds}}" placeholder="Complete este campo...">
          </div>
          <div class="mb-3">
            <label for="people" class="form-label">Cantidad de personas</label>
            <input id="people" name="people" type="text" class="form-control" value="{{$room->number_people}}" placeholder="Complete este campo...">
          </div>
          <div class="form-group mb-3">
            <label class="mb-0" for="">Imagen</label>
            <input type="file" accept="image/*" class="form-control" name="image" id="image">
          </div>





          
          <div class="d-flex align-items-start">
            <div>
              <input type="checkbox" class="form-check-input" switch="none"  @if ($room->has_offer) checked @endif name="has_offer" id="has-offer" value="1">
              <label for="has-offer" class="form-check-label user-select-none cursor-pointer " for="flexCheckIndeterminate" data-on-label="Si" data-off-label="No"></label>
            </div>
            <div style="padding-block-start: 3px;"> Agregar descuento</div>
          </div>

          <div class="d-none row" id="inputs-add-offer">
            <div class="form-group mb-3">
              <label for="discount" class="form-label">Descuento %</label>
              <input id="discount" name="discount" type="number" class="form-control" value="{{$room->discount}}" placeholder="Ejemplo: 0">
            </div>
         </div>


            {{-- <div class="form-group mb-3">
              <label for="rental_price" class="form-label">Precio de alquiler</label>
              <input readonly id="discorental_priceunt" name="rental_price" type="number" class="form-control" value="{{$room->rental_price}}" placeholder="Ejemplo: 0">
            </div> --}}

          <a href="{{ route('admin.room.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
          <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
@section('scripts')
  <script>
    const $hasAddOffer = document.getElementById('has-offer')
    const $inputsAddOffer = document.getElementById('inputs-add-offer')
    $hasAddOffer.addEventListener('change', function(){
      setClassTogggleDisplay()
    })

    function setClassTogggleDisplay(){
      const method = $hasAddOffer.checked ? 'remove' : 'add'
      $inputsAddOffer.classList[method]('d-none')
    }
    setClassTogggleDiplay()
  </script>

@endsection

