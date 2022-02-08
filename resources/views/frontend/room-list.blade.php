@extends('frontend.layouts.app')

@section('content')
<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Vista de la lista de habitaciones</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Lista de habitaciones</li>
        </ol>
    </div>
</div>
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Rooms Section Start-->
    <section>
        <div class="container">
            <!--Rooms List Start-->
            <div class="room-list-view flex-text">
                <figure>
                    <img src="{{asset('frontend/extra-images/room-list.jpg')}}" alt="oscarthemes"/>
                </figure>
                <div class="overflow-text">
                    <div class="text">
                        <h4 class="title"><a href="#">Habitación con vistas a la playa</a></h4>
                        <!--Rating Start-->
                        <div class="chr-rating">
                            <span>Clasificación :  <b class="th-cl">4.5</b></span>
                            <div class="rating_down">
                                <div class="rating_up" style="width:90%;"></div>
                            </div>
                        </div>
                        <!--Rating End-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived...</p>
                    </div>
                    <div class="chr-price-thumb">
                        <h6>$65<span>por 1 noche</span></h6>
                        <a class="chr-btn fancy-btn" href="#">Reservar ahora</a>
                    </div>
                </div>
            </div>
            <!--Rooms List End-->
            <!--Rooms List Start-->
            <div class="room-list-view flex-text">
                <figure>
                    <img src="{{asset('frontend/extra-images/room-list2.jpg')}}" alt="oscarthemes"/>
                </figure>
                <div class="overflow-text">
                    <div class="text">
                        <h4 class="title"><a href="#">Sala del nivel del club</a></h4>
                        <!--Rating Start-->
                        <div class="chr-rating">
                            <span>Clasificación :  <b class="th-cl">4.5</b></span>
                            <div class="rating_down">
                                <div class="rating_up" style="width:90%;"></div>
                            </div>
                        </div>
                        <!--Rating End-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived...</p>
                    </div>
                    <div class="chr-price-thumb">
                        <h6>$80<span>por 1 noche</span></h6>
                        <a class="chr-btn fancy-btn" href="#">Reserva ahora</a>
                    </div>
                </div>
            </div>
            <!--Rooms List End-->
            <!--Rooms List Start-->
            <div class="room-list-view flex-text">
                <figure>
                    <img src="{{asset('frontend/extra-images/room-list3.jpg')}}" alt="oscarthemes"/>
                </figure>
                <div class="overflow-text">
                    <div class="text">
                        <h4 class="title"><a href="#">Habitación con cama doble</a></h4>
                        <!--Rating Start-->
                        <div class="chr-rating">
                            <span>Rating :  <b class="th-cl">4.5</b></span>
                            <div class="rating_down">
                                <div class="rating_up" style="width:90%;"></div>
                            </div>
                        </div>
                        <!--Rating End-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived...</p>
                    </div>
                    <div class="chr-price-thumb">
                        <h6>$95<span>por 1 noche</span></h6>
                        <a class="chr-btn fancy-btn" href="#">Reservar ahora</a>
                    </div>
                </div>
            </div>
            <!--Rooms List End-->
            <!--Rooms List Start-->
            <div class="room-list-view flex-text">
                <figure>
                    <img src="{{asset('frontend/extra-images/room-list4.jpg')}}" alt="oscarthemes"/>
                </figure>
                <div class="overflow-text">
                    <div class="text">
                        <h4 class="title"><a href="#">Villa familiar</a></h4>
                        <!--Rating Start-->
                        <div class="chr-rating">
                            <span>Clasificación :  <b class="th-cl">4.5</b></span>
                            <div class="rating_down">
                                <div class="rating_up" style="width:90%;"></div>
                            </div>
                        </div>
                        <!--Rating End-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived...</p>
                    </div>
                    <div class="chr-price-thumb">
                        <h6>$95<span>por 1 noche</span></h6>
                        <a class="chr-btn fancy-btn" href="#">Reservar ahora</a>
                    </div>
                </div>
            </div>
            <!--Rooms List End-->
            <!--Rooms List Start-->
            <div class="room-list-view flex-text">
                <figure>
                    <img src="{{asset('frontend/extra-images/room-list5.jpg')}}" alt="oscarthemes"/>
                </figure>
                <div class="overflow-text">
                    <div class="text">
                        <h4 class="title"><a href="#">Habitación dúplex</a></h4>
                        <!--Rating Start-->
                        <div class="chr-rating">
                            <span>Clasificación :  <b class="th-cl">4.5</b></span>
                            <div class="rating_down">
                                <div class="rating_up" style="width:90%;"></div>
                            </div>
                        </div>
                        <!--Rating End-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived...</p>
                    </div>
                    <div class="chr-price-thumb">
                        <h6>$75<span>por 1 noche</span></h6>
                        <a class="chr-btn fancy-btn" href="#">Reservar ahora</a>
                    </div>
                </div>
            </div>
            <!--Rooms List End-->
            <!--Rooms List Start-->
            <div class="room-list-view flex-text">
                <figure>
                    <img src="{{asset('frontend/extra-images/room-list6.jpg')}}" alt="oscarthemes"/>
                </figure>
                <div class="overflow-text">
                    <div class="text">
                        <h4 class="title"><a href="#">Habitación Superior</a></h4>
                        <!--Rating Start-->
                        <div class="chr-rating">
                            <span>Clasificación :  <b class="th-cl">4.5</b></span>
                            <div class="rating_down">
                                <div class="rating_up" style="width:90%;"></div>
                            </div>
                        </div>
                        <!--Rating End-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived...</p>
                    </div>
                    <div class="chr-price-thumb">
                        <h6>$105<span>por 1 noche</span></h6>
                        <a class="chr-btn fancy-btn" href="#">Reservar ahora</a>
                    </div>
                </div>
            </div>
            <!--Rooms List End-->
            <!-- Pagination Start-->
            <div class="chr-pagination text-center">
                <span class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="page-numbers" href="#">3</a>
                <a class="page-numbers border_none" href="#">...</a>
                <a class="page-numbers" href="#">18</a>
                <a class="page-numbers" href="#">19</a>
                <a class="page-numbers" href="#">20</a>
            </div>
            <!-- Pagination End-->
        </div>
    </section>
    <!--Rooms Section End-->
</div>
@endsection
