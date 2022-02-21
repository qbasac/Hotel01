@extends('backend.layouts.app')

@section('sub-title')
    Habitaciones
@endsection
@section('styles')
  <style>
    ::-webkit-scrollbar {
      height: 5px;
      width: 5px;
      display: block;
    }

    ::-webkit-scrollbar-track {
      background-color: #73b9ff;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #1B82EC;
      border-radius: 5px;
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
           <!-- <a href="{{ route('admin.room.create') }}" class="btn btn-primary">Nuevo <i class="fas fa-plus"></i></a>  -->
          </div>
          <hr>
          {{-- <hr> --}}
          {{-- <br> --}}
          <form class="row justify-content-end" action="{{ route('admin.room.index') }}" method="GET" autocomplete="off">
            {{-- <div class="col-12 col-md-6">
              <label class="form-control-plaintext">Filtrar</label>
            </div> --}}
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
          {{-- <div class="row">
                <div class="col-12">
                  <a class="navbar-brand"></a>
                </div>
              </div> --}}
          <div class="table-responsive">
            <table class="table table-sm table-striped mt-4">
              <thead>
                  <tr>
                    <th style="width: 120px;" scope="col">Opciones</th>
                    <th style="width: 90px;" scope="col">Estado</th>
                    <th style="min-inline-size: 120px;">Nombre</th>
                    <th style="min-inline-size: 120px;">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Camas</th>
                    <th scope="col">Personas</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($rooms as $room)
                  <tr>
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
                      </td>

                      <td style="vertical-align: middle;">{{$room->name}}</td>
                      <td style="vertical-align: middle;">{{$room->description}}</td>
                      <td style="vertical-align: middle;">{{$room->price}}</td>
                      <td style="vertical-align: middle;">{{$room->number_beds}}</td>
                      <td style="vertical-align: middle;">{{$room->number_people}}</td>

                      {{-- <td style="vertical-align: middle;" class="text-center">
                        @if ($room->image)
                          <img src="{{ asset('backend/assets/images/users/F.png') }}" class="rounded-circle" width="30" height="30">
                        @else
                          <img src="{{ asset('backend/assets/images/users/M.png') }}" class="rounded-circle" width="30" height="30">
                        @endif
                    </td> --}}
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
