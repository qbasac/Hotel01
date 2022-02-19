@extends('backend.layouts.app')

@section('title')
  Nuevo Usuario
@endsection

@section('sub-title')
  Usuarios
@endsection

@section('styles')
  <style>
    .checked-star  {
      cursor: pointer;
    }
    .checked-star:hover > i {
      cursor: pointer;
      color: #ED980E;
    }
    .list-checbox-star:checked + i {
      color: #ED980E;
    }
    .list-checbox-star:not(:checked) + i {
      color: rgb(139, 139, 139);
    }
    .list-checbox-star:not(:checked):hover + i {
      cursor: pointer;
      color: #ED980E;
    }
  </style>
@endsection

@section('content')
  <div class="page-content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title text-primary">
              <i class="fas fa-user-plus"></i> Nuevo Comentario
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


            <form action="{{ route('testimonial.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="mb-3">
                <label for="rating" class="form-label">Género</label>
                <select name="gender" id="gender" class="form-select" value="">
                  <option value="">Seleccione</option>
                  <option value="0" selected>Varón</option>
                  <option value="1">Mujer</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input id="name" name="name" id="name" type="text" class="form-control" value="{{ old('section_testimonial_name') }}"  placeholder="Complete su nombre..." autofocus>
              </div>
              <div class="form-group mb-3">
                <label for="rating" class="form-label mb-1">Calificación</label>
                <div>
                  <div class="form-group col-sm-12">
                    <label for="star-1" class="checked-star mb-0">
                      <input type="checkbox" name="rating" value="1" class="list-checbox-star d-none" id="star-1">
                      <i class="fas fa-star"></i>
                    </label>
                    <label for="star-2" class="checked-star mb-0">
                      <input type="checkbox" name="rating" value="2" class="list-checbox-star d-none" id="star-2">
                      <i class="fas fa-star"></i>
                    </label>
                    <label for="star-3" class="checked-star mb-0">
                      <input type="checkbox" name="rating" value="3" class="list-checbox-star d-none" id="star-3">
                      <i class="fas fa-star"></i>
                    </label>
                    <label for="star-4" class="checked-star mb-0">
                      <input type="checkbox" name="rating" value="4" class="list-checbox-star d-none" id="star-4">
                      <i class="fas fa-star"></i>
                    </label>
                    <label for="star-5" class="checked-star mb-0">
                      <input type="checkbox" name="rating" value="5" class="list-checbox-star d-none" id="star-5">
                      <i class="fas fa-star"></i>
                    </label>
                    {{-- <i class="far fa-star"></i> --}}
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Comentario</label>
                <textarea id="comment" name="comment" type="text" class="form-control" value="{{ old('section_testimonial_comment') }}" placeholder="Complete su comentario..."></textarea>
              </div>
              <a href="{{ route('testimonial.index') }}" class="btn btn-danger">Cancelar</a>
              <button type="submit" class="btn btn-primary">Guardar <i class="far fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    let biggerNumber = 0 // Número mayor
    const $stars = document.querySelectorAll('.list-checbox-star')

    $stars.forEach( $star => {
      $star.addEventListener('change', ({ target }) => {
        target.checked ? setCheckedStars(target.value) : setUncheckedStars(target.value)
      })
    })

    function setCheckedStars(pointerLargestNumber) {
      const filtersStars = Array.from($stars).filter($star => $star.value <= pointerLargestNumber)
      filtersStars.forEach($star => {
        $star.checked = true
        console.log($star)
      })
    }

    function setUncheckedStars(pointerLargestNumber) {
      const filtersStars = Array.from($stars).filter($star => $star.value > pointerLargestNumber)
      console.log(filtersStars)
      filtersStars.forEach($star => {
        $star.checked = false
        console.log($star)
      })
      $stars.forEach($star => {
        if($star.value == pointerLargestNumber) {
          $star.checked = true
        }
      })
    }

  </script>
@endsection
