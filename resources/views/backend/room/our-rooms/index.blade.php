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

    .column-description{
      inline-size: 200px;
      max-inline-size: 250px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
    }

    .column-name{
      inline-size: 100px;
      max-inline-size: 130px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
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
              <i class="fas fa-hotel me-1"></i> Nuestras habitaciones
            </h6>
            <a href="{{ route('admin.room.create') }}" class="btn btn-primary">Nuevo <i class="fas fa-plus"></i></a>
          </div>
          <hr>

          <form class="row justify-content-end" action="{{ route('admin.room.index') }}" method="GET" autocomplete="off">
            <div class="form-group col-12 col-md-6 col-lg-4">
              <label for="" class="mb-0">Buscar</label>
              <div  class="input-group mb-3">
               <select name="searchBy" id="search-by"  class="form-select form-select cursor-pointer" aria-label=".form-select-sm example">
                 <option value="name" {{ request('searchBy') == 'name' ? 'selected' : '' }}>Nombres</option>
                 <option value="price" {{ request('searchBy') == 'price' ? 'selected' : '' }}>Precio</option>
                 <option value="number_beds" {{ request('searchBy') == 'number_beds' ? 'selected' : '' }}>Camas</option>
               </select>

               <select name="orderBy" id="form-price"  class="form-select form-select cursor-pointer" aria-label=".form-select-sm example">
                 <option value="asc" {{ request('searchBy') == 'price' && request('orderBy') ? 'selected' : '' }} >De menor a mayor</option>
                 <option value="desc" {{ request('searchBy') == 'price' && request('orderBy') ? 'selected' : '' }} >De mayor a menor</option>
               </select>

              <select name="orderBy" id="form-number_beds"  class="form-select form-select cursor-pointer" aria-label=".form-select-sm example">
                <option value="asc" {{ request('searchBy') == 'number_beds' && request('orderBy') ? 'selected' : '' }} >de menor a mayor</option>
                <option value="desc" {{ request('searchBy') == 'number_beds' && request('orderBy') ? 'selected' : '' }} >de mayor a menor</option>
              </select>

                <input class="form-control d-none" id="form-name" type="search" placeholder="Nombres..." {{ request('search') ? 'autofocus' : '' }} name="search" aria-label="Search" value="{{ request('search') }}" >

                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
              </div>

            </div>
          </form>

          <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered mt-4">
              <thead>
                <tr class="vertical-align-middle">
                  <th class="column-options" rowspan="2">Opciones</th>
                  <th class="column-name" rowspan="2">Nombre</th>
                  <th class="column-description" rowspan="2">Descripción</th>
                  <th scope="col" colspan="2" class="text-center">Precio</th>
                  <th style="inline-size: 90px;" rowspan="2" class="text-center">Oferta</th>
                  <th scope="col" rowspan="2">Camas</th>
                  <th scope="col" rowspan="2">Personas</th>
                  <th scope="col" rowspan="2">Imagen</th>

                </tr>
                <tr class="vertical-align-middle">
                  <th>Original </th>
                  <th>Renta </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rooms as $room)
                  <tr class="vertical-align-middle">
                    <td class="column-options">
                      <a href="{{ route('admin.room.edit', ['room' => $room->id] ) }}" class="btn btn-sm btn-info" title="Editar">
                        <i class="far fa-edit"></i>
                      </a>
                      <form action="{{ route('admin.room.destroy',$room->id) }}" method="POST" class="d-inline">
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
                    </td>
                    <td class="column-name"> {{ $room->name }}</td>
                    <td class="column-description"> {{ $room->description }}</td>
                    <td class="column-price"> S/ {{ $room->price }}</td>
                    <td class="column-price"> S/ {{ $room->rental_price }}</td>
                    <td class="column-"> {{ $room->has_offer ? 'Si' : 'No' }} </td>
                    <td class="column-"> {{ $room->number_beds }}</td>
                    <td class="column-"> {{ $room->number_people }}</td>
                    <td>
                      @if ($room->image)
                        <img src="{{ asset('storage/rooms/'.$room->image) }}"  width="60" height="30">
                      @else
                        <img src="{{ asset('assets/image-slider/image-slider-default.png') }}"  width="60" height="30">
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {{ $rooms->links() }}
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script>
    const listFormInputs = ['form-name', 'form-price', 'form-number_beds']
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



    // const $searchBy = document.getElementById('search-by');
    // const listFormInputs = [ 'form-name', 'form-price'];

    // $searchBy.onchange = getCurrentValue
    // getCurrentValue()

    // function getCurrentValue() {
    //   setClassDiplayNone($searchBy.value)
    // }


    //   function setClassDiplayNone(currentValue) {
    //     // const $element = document.getElementById(`form-${currentValue}`)
    //     const listInputs = listFormInputs.map( item => document.getElementById(item) );
    //     listInputs.forEach($input => {
    //       const method = $input.id == `form-${currentValue}` ? 'remove' : 'add'
    //       $input.classList[method]('d-none')

    //       // if($input.id == `form-${currentValue}`) {
    //       //   $input.classList.remove('d-none')
    //       // } else {
    //       //   $input.classList.add('d-none')
    //       // }
    //     })

    //     // console.log(listFormInputs)
    //     // $element.classList.toggle('d-none')
    //     // if (currentValue == 'name') {
    //     //   $element.classList.remove('d-none')
    //     // } else {
    //     //   $element.classList.add('d-none')
    //     // }

    //     // if(currentValue == 'price') {
    //     //   $element.classList.remove('d-none')
    //     // } else {
    //     //   // $element.classList.add('d-none')
    //     // }
    // }

  </script>
@endsection
