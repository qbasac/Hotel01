@extends('frontend.layouts.app')

@section('content')
<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Detalle de la habitación</h5>
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
            <img src="{{asset('frontend/extra-images/room1.jpg')}}" alt="oscarthemes"/>
            <a href="#" class="price-tag th-bg" >
              S/ 100.00
            </a>
          </figure>
          <div class="text">
            <h4 class="title"><a href="{{ route('habitacion-detalle')}}">Habitación de invitados tradicional</a></h4>
            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
            <ul class="blog-meta">
              <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
              <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
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
                  <form>
                      <div class="input-field">
                        <input type="text" placeholder="Su nombre">
                      </div>
                      <div class="input-field">
                        <input type="text" placeholder="Su correo electrónico">
                      </div>
                      <div class="input-field">
                        <input type="text" placeholder="Su número de móvil">
                      </div>
                      <div class="input-field">
                        <input type="text" placeholder="Habitación individual">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="rq-check-in-single">
                              <div class="rq-check-inout-single-wrapper">
                                <span class="rq-single-date">24</span>
                                <span class="rq-month-year">
                                  <span class="rq-single-month"></span>
                                </span>
                                <input type="hidden" name="date_in" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-field">
                            <div class="rq-check-inout-wrapper rq-check-in-wrapper" id="rq-check-out-single">
                              <div class="rq-check-inout-single-wrapper">
                                <span class="rq-single-date">24</span>
                                <span class="rq-month-year">
                                  <span class="rq-single-month">sep</span>
                                </span>
                                <input type="hidden" name="date_out" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--Input Field Start-->
                      <div class="input-field">
                          <select>
                              <option value="">Adultos</option>
                              <option value="aye">1</option>
                              <option value="eh">2</option>
                              <option value="ooh">3</option>
                              <option value="whoop">4</option>
                              <option value="whoop">5</option>
                              <option value="whoop">6</option>
                              <option value="whoop">7</option>
                              <option value="whoop">8</option>
                              <option value="whoop">9</option>
                              <option value="whoop">10</option>
                          </select>
                      </div>
                      <!--Input Field End-->
                      <!--Input Field Start-->
                      <div class="input-field">
                          <select>
                              <option value="">Niños</option>
                              <option value="aye">1</option>
                              <option value="eh">2</option>
                              <option value="ooh">3</option>
                              <option value="whoop">4</option>
                              <option value="whoop">5</option>
                              <option value="whoop">6</option>
                              <option value="whoop">7</option>
                              <option value="whoop">8</option>
                              <option value="whoop">9</option>
                              <option value="whoop">10</option>
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
