@extends('frontend.layouts.app')

@section('style')
  <style>
    .rq-check-inout-single-wrapper::before {
      display: none;
      content: "\f073";
    }
    .input-date {
      inline-size: 100%;
    }

    [type="date"]::-webkit-inner-spin-button {
      display: none;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
      opacity: 1;
    }

    .texttransform {
      text-transform: capitalize;
    }

    .swal2-popup2 {
    display: none;
    position: relative;
    box-sizing: border-box;
    grid-template-columns: minmax(0,100%);
    width: 32em !important;
    max-width: 100%;
    padding: 16px 0 1.25em;
    border: none;
    border-radius: 5px;
    background: #fff;
    color: #545454;
    font-family: inherit;
    font-size: 1rem;
    }

    .swal2-html-container2{
    z-index: 1;
    justify-content: center;
    margin: 1em 1.6em .3em;
    padding: 0;
    overflow: hidden !important;
    color: inherit;
    font-size: 1.125em;
    font-weight: 400;
    line-height: normal;
    text-align: center;
    word-wrap: break-word;
    word-break: break-word;
    }

    body > div.swal2-container.swal2-center.swal2-backdrop-show > div > div.text{
      display: none ;
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


  </style>
@endsection

@section('content')
  <div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
      <h5>Detalle de la habitación</i></h5>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Detalle de la habitación</li>
      </ol>
    </div>
  </div>
  <section>
    <div class="container">
      <aside class="row">
        <div class="col-sm-12 col-md-5">
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
                <h4 class="title"><a href="{{ route('room.show',['room' => $room->id]) }}">{{ $room->name }}</a></h4>
                <p>{{ $room->description }}</p>
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

            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-7">
          <div class="chr-sidebar">
            <div class="widget widget-booking">
              <div class="booking-form th-bd">
                <!--Title Start-->
                <h5 class=" th-bd title">Reserva de habitaciones</h5>
                <!--Title End-->
                <form action="{{ route('room-reservation.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                  @csrf
                  <div class="input-field texttransform">
                    <input id="name" name="name" type="text" placeholder="Su nombre">
                  </div>
                  <div class="input-field">
                    <input id="email" name="email" type="email" placeholder="Su correo electrónico">
                  </div>
                  <div class="input-field">
                    <input id="phone" name="phone" type="text" placeholder="Su número de móvil">
                  </div>
                  <div class="input-field">
                    <select id="room_type" name="room_type">
                      <option value="1">Habitación</option>
                      <option value="2">Individual</option>
                      <option value="3">Duplex</option>
                      <option value="4">Familía</option>
                      <option value="5">Pareja</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-field">
                        <div class="rq-check-inout-wrapper rq-check-in-wrapper">
                          <div class="rq-check-inout-single-wrapper">
                            <input type="date" name="reservation_start_date" class="input-date" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-field">
                        <div class="rq-check-inout-wrapper rq-check-in-wrapper">
                          <div class="rq-check-inout-single-wrapper">
                            <input type="date" name="reservation_end_date" class="input-date" />
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="col-md-6">
                            <div class="input-field">
                              <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="rq-check-out-single">
                                <div class="rq-check-inout-single-wrapper">
                                  <span class="rq-single-date"></span>
                                  <span class="rq-month-year">
                                    <span class="rq-single-month"></span>
                                  </span>
                                  <input id="reservation_end_date" name="reservation_end_date"  type="hidden"/>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                  </div>
                  <!--Input Field Start-->
                  <div class="input-field">
                    <select id="quantity_adults" name="quantity_adults" required>
                      <option value="0">Adultos</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="5">4</option>
                    </select>
                  </div>
                  <!--Input Field End-->
                  <!--Input Field Start-->
                  <div class="input-field">
                    <select id="quantity_childrens" name="quantity_childrens">
                      <option value="">Niños</option>
                      <option value="0">Ninguno</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <!--Input Field End-->
                  <!--Input Field Start-->
                  <div class="input-field">
                    <input class="chr-btn th-bg" type="submit" value="Reservar ahora">

                  </div>
                  <!--Input Field End-->

                </form>
              </div>
            </div>
          </div>
        </div>

      </aside>
    </div>
  </section>
@endsection

@section('scripts')

  @if ($errors->any())
    <script>
        Swal.fire({
          icon: 'error',
          title: 'Corrija los errores!',
          customClass:
          {
            popup: 'swal2-popup2',
            htmlContainer: 'swal2-html-container2',
          },
          html: `
            <ul>
              @foreach ($errors->all() as $message)
                <li style="text-align: start">{{$message}}</li>
              @endforeach
            </ul>
          `,
          confirmButtonText: 'Continuar'
        })
    </script>
  @endif

  @if (session('created') == 'vale')
    <script>
    Swal.fire({
          icon: 'success',
          title: 'Reserva Registrada exitosamente!',

          html: `
          Su reserva se ha registrado exitosamente nos comunicaremos con usted lo más pronto posible para confirmarle su reserva!
          `,
          confirmButtonText: 'Aceptar'
        })
    </script>
  @endif

@endsection
