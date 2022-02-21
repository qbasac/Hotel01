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
  </style>
@endsection
@section('content')

<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Nuestra habitación</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Nuestra habitación 16/02</li>
        </ol>
    </div>
</div>

<div class="main-contant">
  <section>
    <div class="container">

      <div class="row">
        {{-- <nav class="navbar">
          <div class="container-fluid">
            <a class="navbar-brand"></a>
              <div class="col-auto">
                <label class="form-control-plaintext">Fitrar por precio</label>
              </div>

              <div class="col-auto">
                <div class="form-group">
                  <select name="searchBy" id=""  class="form-select form-select" aria-label=".form-select-sm example">
                    <option value="name">Precios entre 20 - 80 soles</option>
                    <option value="email">Precios entre 100 - 200 soles</option>
                  </select>
                </div>
              </div>

              <div class="col-auto">
              <div class="input-group mb-3">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
              </div></div>
          </div>
        </nav> --}}
      </div>
      @foreach ($rooms as $room)
      <div class="col-md-4 col-sm-6">
        <div class="chr-room-thumb fancy-thumb">
            <figure>
              <img src='{{ asset("storage/rooms/$room->image")}}' alt="oscarthemes"/>
              {{-- {{ asset('storage/users/'.$user->avatar) }} --}}
              <a href="#" class="price-tag th-bg">$ {{ $room->price }}</a>
            </figure>
            <div class="text">
                <h4 class="title"><a href="habitacion-detalle">{{ $room->name }}</a></h4>
                <p>{{ $room->description }}</p>
                <ul style="margin: 5px !important;" class="blog-meta">
                    <li><i class="fa fa-bed th-cl"></i><span>{{ $room->number_beds }} Cama</span></li>
                    <li><i class="fa fa-user th-cl"></i><span>{{ $room->number_people }} Duerme</span></li>
                </ul>
                <div style="text-align: center;">
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
