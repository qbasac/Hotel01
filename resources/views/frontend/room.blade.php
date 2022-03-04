@extends('frontend.layouts.app')

@section('style')
  <style>
   .pagination li {
    margin-left: .25rem;
    margin-right: .25rem;
    }

    .pagination li .page-link {
      border-radius: 5rem;
      border: none;
      min-width: 2.25rem;
      text-align: center;
      color: #4f5464;
    }

    .pagination li.active .page-link,
    .pagination li .page-link:hover {
      background-color: #EDCB9A;
      color: #fff;
      font-weight: bold;
    }
    :focus::placeholder {
      opacity: 0;
      transition-property: all;
      transition-duration: 300ms;
     }

    .has_offer{
      position: absolute;
      top: 2rem;
      left: 2rem;
      display: inline-block;
      font-weight: 600;
      background: #ff1212;
      padding: 0 1rem;
      color: white;
      }

      .room_quantity{
      margin: 5px !important; display: block; inline-size: 100%;text-align: center;
      }

      .has_offer_if{
        text-align: center;margin: 1rem 0 .5rem;
      }

      .sup_room_price{
        text-decoration: line-through;color: #969696;
      }

      .span_rental_price{
        font-weight: 600; font-size: 2rem
      }

      .btn_reservar{
        text-align: center;
      }

      .paragraph_name{
      inline-size: 300px;
      block-size: 40px;
      max-inline-size: 100%;
      overflow:hidden;
      text-overflow:ellipsis;
      display:-webkit-box;
      -webkit-box-orient:vertical;
      -webkit-line-clamp:2;
      }

    .paragraph_description{
      inline-size: 320px;
      block-size: 70px;
      max-inline-size: 305px;
      overflow:hidden;
      text-overflow:ellipsis;
      display:-webkit-box;
      -webkit-box-orient:vertical;
      -webkit-line-clamp:3;
    }
    .cursor-pointer {
      cursor: pointer;
    }
  </style>
@endsection
@section('content')

<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Nuestra habitación</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Nuestra habitación</li>
        </ol>
    </div>
</div>

</section>
<div class="main-contant">
  <section>
    <div class="container">
      <div class="col-sm-12">
        <h4 class="title mb-3" style="    margin-block-end: 1em;
        font-weight: 500;
        color: #505050;">Buscar habitación</h4>
      </div>
      <div class="col-sm-12">
        <div class="input-field">
          <form action="{{ route('room.index') }}" method="GET" autocomplete="off" class="row">
            {{-- <div class="col-sm-12 col-md-4">
              <select name="searchBy" id="search-by" class="cursor-pointer">
                <option value="name" {{ request('searchBy') == 'name' ? 'selected' : '' }}>Nombres</option>
                <option value="price" {{ request('searchBy') == 'price' ? 'selected' : '' }}>Precio</option>
                <option value="number_beds" {{ request('searchBy') == 'number_beds' ? 'selected' : '' }}>Camas</option>
              </select>
            </div> --}}
            {{-- <div class="col-sm-12 col-md-4">
              <select name="orderBy" id="form-price">
                <option value="asc" {{ request('searchBy') == 'price' && request('orderBy') ? 'selected' : '' }} >De menor a mayor</option>
                <option value="desc" {{ request('searchBy') == 'price' && request('orderBy') ? 'selected' : '' }} >De mayor a menor</option>
              </select>
            </div> --}}
            <div class="col-sm-12 col-md-4 col-lg-7">
              <div class="widget widget-search">
                <div class="input-field">
                  <input class="form-control d-none" id="form-name" type="search" placeholder="Nombres..." {{ request('search') ? 'autofocus' : '' }} name="search" aria-label="Search" value="{{ request('search') }}" >
                  <label class="search_icon"><input type="submit"></label>
                </div>
              </div>
            </div>
            {{-- <div class="col-sm-12 col-md-4 col-lg-3">
              <div class="widget widget-search">
                <div class="input-field">
                  <input class="form-control d-none" id="form-name" type="search" placeholder="Descripción..." {{ request('search') ? 'autofocus' : '' }} name="search" aria-label="Search" value="{{ request('search') }}" >
                  <label class="search_icon"><input type="submit"></label>
                </div>
              </div>
            </div> --}}
             <div style="cursor: pointer;"style="cursor: pointer;" class="col-sm-12 col-md-2">
              <select  name="prices" id="form-price">
                <option value="0" {{ request('prices') == 'price' && request('prices') ? 'selected' : '' }} >Todo precio</option>
                <option value="1" {{ request('prices') == 'price' && request('prices') ? 'selected' : '' }} >De 10 - 50</option>
                <option value="2" {{ request('prices') == 'price' && request('prices') ? 'selected' : '' }} >De 51 - 100</option>
                <option value="3" {{ request('prices') == 'price' && request('prices') ? 'selected' : '' }} >De 100 - más</option>
              </select>
            </div>

            <div style="cursor: pointer;"style="cursor: pointer;" class="col-sm-12 col-md-2">
              <select  name="number_beds" id="form-price">
                <option value="0" {{ request('number_beds') == 'number_beds' && request('number_beds') ? 'selected' : '' }} >Cantidad de camas</option>
                <option value="1" {{ request('number_beds') == 'number_beds' && request('number_beds') ? 'selected' : '' }} >De 10 - 50</option>
                <option value="2" {{ request('number_beds') == 'number_beds' && request('number_beds') ? 'selected' : '' }} >De 51 - 100</option>
                <option value="3" {{ request('number_beds') == 'number_beds' && request('number_beds') ? 'selected' : '' }} >De 100 - más</option>
              </select>
            </div>

            <div class="col-sm-12 col-md-1">
              <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
            </div>

          </form>
        </div>
      </div>
      <div class="row">
        {{-- <div class="col-md-3 ">
        </div> --}}

        {{-- <div class="col-md-3 ">
          <select name="searchBy" id="search-by">
            <option value="name" {{ request('searchBy') == 'name' ? 'selected' : '' }}>Nombres</option>
            <option value="price" {{ request('searchBy') == 'price' ? 'selected' : '' }}>Precio</option>
            <option value="number_beds" {{ request('searchBy') == 'number_beds' ? 'selected' : '' }}>Camas</option>
          </select>
          <select name="orderBy" id="form-price">
            <option value="asc" {{ request('searchBy') == 'price' && request('orderBy') ? 'selected' : '' }} >De menor a mayor</option>
            <option value="desc" {{ request('searchBy') == 'price' && request('orderBy') ? 'selected' : '' }} >De mayor a menor</option>
          </select>
       </div> --}}
      {{-- <div class="container">
      </div> --}}

      {{-- <form class="row justify-content-end" action="{{ route('admin.room.index') }}" method="GET" autocomplete="off">
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
      </form> --}}
    </div>

    @foreach ($rooms as $room)
      <div class="col-md-4 col-sm-6">
          <div class="chr-room-thumb fancy-thumb">
              <figure>
                <img src='{{ asset("storage/rooms/$room->image")}}' alt="oscarthemes"/>

                @if ($room->has_offer)
                <div class="has_offer"
                  <span>Desct. {{ $room->discount }}%</span>
                </div>
                @endif
              </figure>
              <div class="text">
                  <h4 class="paragraph_name"><a href="{{ route('room.show',['room' => $room->id]) }}">{{ $room->name }}</a></h4>
                  <p class="paragraph_description">{{ $room->description }}</p>
                  <ul class="room_quantity blog-meta">
                    <li><i class="fa fa-bed th-cl"></i><span>{{ $room->number_beds }} Cama</span></li>
                    <li><i class="fa fa-user th-cl"></i><span>{{ $room->number_people }} Duerme</span></li>
                  </ul>
                  <div class="has_offer_if">
                    @if ($room->has_offer)
                      <sup class="sup_room_price">S/{{ number_format(ceil($room->price),2) }}</sup>
                    @endif
                    <span class="span_rental_price">
                      S/ {{ number_format(ceil($room->rental_price),2) }}
                    </span>
                  </div>
                  <div class="btn_reservar">
                    <a class="chr-btn fancy-btn" href="{{ route('room.show',['room' => $room->id]) }}">Reservar ahora</a>
                  </div>
              </div>
          </div>
      </div>
    @endforeach
     <div style="text-align: center;">
           {{ $rooms->links() }}
     </div>
      </div>
    </div>
  </section>
</div>
@endsection


@section('scripts')
<script>
  const listFormInputs = ['form-name', 'form-price',] // 'form-number_beds'
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
</script>


{{-- <script>
    Swal.fire({
      icon: 'error',
      title: 'Corrija los errores!',
      text:"Some",
      confirmButtonText: 'Continuar'
    })
  </script> --}}
@endsection
