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
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Rooms Section Start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--Rooms Detail Start-->
                    <div class="chr-room-detail">
                        <!--Rooms Detail Slider Start-->
                        <div class="room-detail-slider">
                            <!--Rooms Detail Slider Thumb Start-->
                            <div class="slider-for arrows arrows-radius">
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide1.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide2.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide3.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide4.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide5.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide6.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide7.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide8.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                            </div>
                            <!--Rooms Detail Slider Thumb End-->
                            <!--Rooms Detail Slider Nav Start-->
                            <div class="slider-nav">
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb1.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb2.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb3.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb4.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb5.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb6.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb6.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb7.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <div>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/slide-thumb8.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                            </div>
                            <!--Rooms Detail Slider Nav End-->
                        </div>
                        <!--Rooms Detail Slider End-->
                        <!--Rooms Detail Caption Start-->
                        <div class="room-detail-caption">
                            <h5 class="heading-title">Acerca de la habitación</h5>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Ut enim ad minima veniam, quis nostrum exercitationem. </p>
                            <p>Tullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Ut enim ad minima veniam, quis nostrum exercitationem. </p>
                        </div>
                        <!--Rooms Detail Caption End-->
                        <!--Rooms Facilities Start-->
                        <div class="room-facilities">
                            <h5 class="heading-title">Instalaciones de la habitación</h5>
                            <!--Facilities List  Start-->
                            <ul class="facilities-list">
                                <li><div class="svg-icon"><img src="{{asset('frontend/images/svg/tv-screen.svg')}}" alt="oscarthemes"/></div><span>tv</span></li>
                                <li><div class="svg-icon"><img src="{{asset('frontend/images/svg/air-conditioner-1.svg')}}" alt="oscarthemes"/></div><span>A.C</span></li>
                                <li><div class="svg-icon"><img src="{{asset('frontend/images/svg/wifi-2.svg')}}" alt="oscarthemes"/></div><span>Wi-Fi gratuito</span></li>
                                <li><div class="svg-icon"><img src="{{asset('frontend/images/svg/milk.svg')}}" alt="oscarthemes"/></div><span>Romper el ayuno</span></li>
                                <li><div class="svg-icon"><img src="{{asset('frontend/images/svg/garage.svg')}}" alt="oscarthemes"/></div><span>Aparcamiento gratuito</span></li>
                                <li><div class="svg-icon"><img src="{{asset('frontend/images/svg/newspaper.svg')}}" alt="oscarthemes"/></div><span>Periódico gratuito</span></li>
                                <li><div class="svg-icon"><img src="{{asset('frontend/images/svg/service.svg')}}" alt="oscarthemes"/></div><span>Servicio de habitaciones</span></li>
                                <li><div class="svg-icon"><img src="{{asset('frontend/images/svg/phone-call.svg')}}" alt="oscarthemes"/></div><span>Teléfono de marcación directa internacional</span></li>
                            </ul>
                            <!--Facilities List  End-->
                        </div>
                        <!--Rooms Facilities End-->
                        <!--Rooms Related Start-->
                        <div class="room-related">
                            <h5 class="heading-title">Habitaciones relacionadas</h5>
                            <div class="row">
                                <!--Services Thumb Start-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="chr-services fancy-thumb">
                                        <figure>
                                            <img src="{{asset('frontend/extra-images/room5.jpg')}}" alt="oscarthemes">
                                            <a href="#" class="price-tag th-bg">$ 250</a>
                                        </figure>
                                        <div class="text">
                                            <h5 class="title"><a href="room-detail.html">Habitación de lujo </a></h5>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Services Thumb End-->
                                <!--Services Thumb Start-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="chr-services fancy-thumb">
                                        <figure>
                                            <img src="{{asset('frontend/extra-images/room4.jpg')}}" alt="oscarthemes">
                                            <a href="#" class="price-tag th-bg">$ 250</a>
                                        </figure>
                                        <div class="text">
                                            <h5 class="title"><a href="room-detail.html">Sala de estar</a></h5>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Services Thumb End-->
                            </div>
                        </div>
                        <!--Rooms Related End-->
                    </div>
                    <!--Rooms Detail End-->
                </div>
                <aside class="col-md-4">
                    <!--Side Bar Start-->
                    <div class="chr-sidebar">
                        <!--Widget Booking Start-->
                        <div class="widget widget-booking">
                            <div class="booking-form th-bd">
                                <!--Title Start-->
                                <h5 class=" th-bd title">Reserva de habitaciones</h5>
                                <!--Title End-->
                                <form>
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <input type="text" placeholder="Su nombre">
                                    </div>
                                    <!--Input Field End-->
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <input type="text" placeholder="Su correo electrónico">
                                    </div>
                                    <!--Input Field End-->
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <input type="text" placeholder="Su número de móvil">
                                    </div>
                                    <!--Input Field End-->
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <input type="text" placeholder="Habitación individual">
                                    </div>
                                    <!--Input Field End-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!--Input Field Start-->
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
                                            <!--Input Field End-->
                                        </div>
                                        <div class="col-md-6">
                                            <!--Input Field Start-->
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
                                            <!--Input Field End-->
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
                        <!--Widget Booking End-->
                        <!--Widget Info Start-->
                        <div class="widget">
                            <div class="widget-info th-bg">
                                <p>Si tiene alguna pregunta, no dude en ponerse en contacto con nosotros</p>
                                <ul class="info-list">
                                    <li><i class="fa fa-phone"></i><span>1-888-123-4567</span></li>
                                    <li><i class="fa fa-envelope-o"></i><span>info@company.com</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Info End-->
                        <!--Widget Special Start-->
                        <div class="widget widget-special">
                            <div class="special-room">
                                <h5 class="title">Sala especial</h5>
                                <div class="special-room-slider dot-style-1">
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/s-room1.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/s-room2.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/s-room3.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                                <h5 class="chr-price">
                                   <span class="th-cl"> $350</span> / Noche
                                </h5>
                            </div>
                        </div>
                        <!--Widget Special End-->
                    </div>
                    <!--Side Bar End-->
                </aside>
            </div>
        </div>
    </section>
    <!--Rooms Section End-->
</div>
@endsection
