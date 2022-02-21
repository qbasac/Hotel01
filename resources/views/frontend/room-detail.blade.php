@extends('frontend.layouts.app')

@section('style')
  <style>

     .rq-check-inout-single-wrapper::before {
       display: none;
      content: "\f073";
      /* font-family: 'Font Awesome 5 Free';
      cursor: pointer;
      opacity: 0.7; */
    }
    /*
    .rq-check-inout-single-wrapper:hover::before {
      opacity: 1;
    }
    .input-date::before {
      opacity: 0;
    } */
    .input-date {
      inline-size: 100%;
    }

    [type="date"]::-webkit-inner-spin-button {
      display: none;
    }
    [type="date"]::-webkit-calendar-picker-indicator {
      opacity: 1;
    }

    .texttransform{
      text-transform: capitalize;
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
            <img src="{{ asset("storage/rooms/$room->image")}}" alt="oscarthemes"/>
            <a href="#" class="price-tag th-bg" >
              S/ {{ $room->price }}
            </a>
          </figure>
          <div  class="text">
            <h4 class="title"><a href="{{ route('habitacion-detalle')}}">{{ $room->name }}</a></h4>
            <p>{{ $room->description }}</p>
            <ul class="blog-meta">
              <li><i class="fa fa-bed th-cl"></i><span >{{ $room->number_beds }} Cama</span></li>
              <li><i class="fa fa-user th-cl"></i><span>{{ $room->number_people }} Duerme</span></li>
            </ul>
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
                        <input id="name" name="name" type="text" placeholder="Su nombre" required>
                      </div>
                      <div class="input-field">
                        <input id="email" name="email" type="email" placeholder="Su correo electrónico" required>
                      </div>
                      <div class="input-field">
                        <input id="phone" name="phone" type="text" placeholder="Su número de móvil" required>
                      </div>
                      <div class="input-field" required>
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
                                <input type="date" name="reservation_start_date" class="input-date" required/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-field">
                            <div class="rq-check-inout-wrapper rq-check-in-wrapper" >
                              <div class="rq-check-inout-single-wrapper">
                                <input type="date" name="reservation_end_date" class="input-date" required/>
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
                          <input class="chr-btn th-bg" type="submit" value="Compruebe la disponibilidad">

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
  <script>
    // var currentDate = $(".rq-check-in-single");

    // // const START_DATA = $("#rq-check-out-single")
    // // const g = ["January", "Febrero", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    // START_DATA.datetimepicker({
    //     timepicker: !1,
    //     minDate: 0,
    //     scrollMonth: !1,
    //     onShow: function(t) {
    //         this.setOptions({
    //             maxDate: !!$("#rq-check-out-single").val() && $("#rq-check-out-single").val()
    //         })
    //     },
    //     onChangeDateTime: function() {
    //       var t = e.datetimepicker("getValue");
    //       const currentDate = new Date();
    //       const date = `${currentDate.getFullYear()}-${currentDate.getMonth()}-${currentDate.getDay()}`
    //       console.log(date)
    //       document.getElementById('reservation_end_date').value = date
    //       e.find(".rq-single-date").html(t.getDate()),
    //       e.find(".rq-single-month").html(g[t.getMonth()].toString().substr(0, 3)),
    //       e.find(".rq-single-year").html(t.getFullYear().toString().substr(2, 2))
    //     }
    // })
  </script>
@endsection
