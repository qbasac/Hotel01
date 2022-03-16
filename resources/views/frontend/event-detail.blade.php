@extends('frontend.layouts.app')

@section('content')
<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Detalle del evento</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Detalle del evento</li>
        </ol>
    </div>
</div>
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Event Detail Section Start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--Event Detail Start-->
                    <div class="chr-room-detail chr-event-detail">
                        <!--Event Detail Slider Start-->
                      <figure>
                          <img src="{{ asset('frontend/extra-images/img-d1.jpg') }}" alt="oscarthemes">
                      </figure>
                        {{-- <div class="room-detail-slider">
                            <!--Event Detail Slider Thumb Start-->
                            <div class="slider-for arrows">
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
                                        <img src="{{asset('frontend/extra-images/slide6.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                </div>
                            </div>
                            <!--Event Detail Slider Thumb End-->
                            <!--Event Detail Slider Nav Start-->
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
                            </div>
                            <!--Event Detail Slider Nav End-->
                        </div> --}}
                        <!--Event Detail Slider End-->
                        <!--Event Detail Caption Start-->
                        <div class="room-detail-caption event-detail-caption">
                            <h5 class="heading-title">{{$event->name}}</h5>
                            <p>El evento Trailwalker consiste en que equipos de cuatro personas completen 100 km de caminata por el monte en 48 horas. Los equipos deben comprometerse a recaudar un mínimo de 1.000 dólares, que se destinarán a ayudar a los pobres.</p>
                            <p>Ut dignissim, nunc vel fringilla cursus, nunc nisl mattis est, vel pharetra mauris nisi non lorem. Duis ipsum neque, congue quis semper at, malesuada quis ex. Aliquam lacinia eget lorem ac lobortis. Donec justo turpis, congue vel nulla eu, viverra porta magna. Quisque ac sapien ac lorem pellentesque commodo. Aenean porta, libero sed vehicula auctor, magna augue bibendum mi, sed molestie est velit id massa. Praesent ut dolor facilisis, viverra est sed, porttitor ante. Quisque vel diam non mi elementum gravida sodales a nisl. Praesent eget blandit ipsum, eget ornare elit. Praesent blandit sagittis turpis, non blandit nibh commodo a. Duis nec finibus massa.</p>
                        </div>
                        <!--Event Detail Caption End-->
                        <!--Event Detail Start-->
                        <div class="event-detail-info">
                            <h5 class="heading-title">Detalles del evento</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-event-info">
                                        <div class="text">
                                            <h6 class="title"><i class="fa fa-clock-o"></i>Hora de inicio</h6>
                                            <p>9:00 A.M</p>
                                            <p>Jueves, 18 de febrero de 2016</p>
                                        </div>
                                        <div class="text">
                                            <h6 class="title"><i class="fa fa-clock-o"></i>Tiempo de finalización</h6>
                                            <p>2:00 P.M</p>
                                            <p>Jueves, 18 de febrero de 2016</p>
                                        </div>
                                        <div class="text">
                                            <h6 class="title"><i class="fa fa-map-marker"></i>Lugar de celebración</h6>
                                            <p>Henderson, Nevada</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Event Detail Caption Start-->
                                    <div class="room-detail-caption event-detail-caption">
                                        <p>Ut dignissim, nunc vel fringilla cursus, nunc nisl mattis est, vel pharetra mauris nisi non lorem. Duis ipsum neque, congue quis semper at, malesuada quis ex. Aliquam lacinia eget lorem ac lobortis. Donec justo turpis, congue vel nulla eu, viverra porta magna. Quisque ac sapien ac lorem pellentesque commodo.</p>
                                        <p>Ut dignissim, nunc vel fringilla cursus, nunc nisl mattis est, vel pharetra mauris nisi non lorem. Duis ipsum neque, congue quis semper at, malesuada quis ex. Aliquam lacinia eget lorem ac lobortis. Donec justo turpis, congue vel nulla eu, viverra porta magna. Quisque ac sapien ac lorem pellentesque commodo.</p>
                                    </div>
                                    <!--Event Detail Caption End-->
                                </div>
                            </div>
                        </div>
                        <!--Event Facilities End-->
                        <!--Event Related Start-->
                        <div class="room-related event-related">
                            <h5 class="heading-title">QUE VIENEN CON NOSOTROS?</h5>
                            <div class="row">
                                <!--Staff Thumb Start-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="chr-staff-thumb">
                                        <figure>
                                            <img src="{{asset('frontend/extra-images/img-1.png')}}" alt="oscarthemes"/>
                                            <div class="p-middel">
                                                <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                                                <ul class="chr-social">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="text">
                                            <h5 class="title"><a href="#">Daniel Braim</a></h5>
                                            <span class="designation">Director de eventos</span>
                                        </div>
                                    </div>
                                </div>
                                <!--Staff Thumb End-->
                                <!--Staff Thumb Start-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="chr-staff-thumb">
                                        <figure>
                                            <img src="{{asset('frontend/extra-images/img-5.png')}}" alt="oscarthemes"/>
                                            <div class="p-middel">
                                                <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                                                <ul class="chr-social">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="text">
                                            <h5 class="title"><a href="#">Daniel Braim</a></h5>
                                            <span class="designation">Director de eventos</span>
                                        </div>
                                    </div>
                                </div>
                                <!--Staff Thumb End-->
                                <!--Staff Thumb Start-->
                                <div class="col-md-4 hidden-sm">
                                    <div class="chr-staff-thumb">
                                        <figure>
                                            <img src="{{asset('frontend/extra-images/img-3.png')}}" alt="oscarthemes"/>
                                            <div class="p-middel">
                                                <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                                                <ul class="chr-social">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="text">
                                            <h5 class="title"><a href="#">Daniel Braim</a></h5>
                                            <span class="designation">Director de eventos</span>
                                        </div>
                                    </div>
                                </div>
                                <!--Staff Thumb End-->
                            </div>
                        </div>
                        <!--Event Related End-->
                    </div>
                    <!--Event Detail End-->
                </div>
                <aside class="col-md-4">
                    <!--Side Bar Start-->
                    <div class="chr-sidebar">
                        <!--Widget Search Start-->
                        <div class="widget widget-search">
                            <!--Input Field Start-->
                            <div class="input-field">
                                <input type="text" placeholder="Search Anything">
                                <label class="search_icon"><input type="submit"></label>
                            </div>
                            <!--Input Field End-->
                        </div>
                        <!--Widget Search End-->
                        <!--Widget Event Start-->
                        <div class="widget widget-event">
                            <!--Widget Title Start-->
                            <h5 class="title">Próximos eventos</h5>
                            <!--Widget Title End-->
                            <!--Event List Start-->
                            <div class="widget-event-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/w-event1.jpg')}}" alt="oscarthemes">
                                </figure>
                                <div class="text-overflow">
                                    <p>El trozo estándar de Lorem Ipsum utilizado desde...</p>
                                    <ul class="blog-meta">
                                        <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                        <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium </span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Event List End-->
                            <!--Event List Start-->
                            <div class="widget-event-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/w-event2.jpg')}}" alt="oscarthemes">
                                </figure>
                                <div class="text-overflow">
                                    <p>El trozo estándar de Lorem Ipsum utilizado desde...</p>
                                    <ul class="blog-meta">
                                        <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                        <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium </span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Event List End-->
                            <!--Event List Start-->
                            <div class="widget-event-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/w-event3.jpg')}}" alt="oscarthemes">
                                </figure>
                                <div class="text-overflow">
                                    <p>El trozo estándar de Lorem Ipsum utilizado desde...</p>
                                    <ul class="blog-meta">
                                        <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                        <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium </span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Event List End-->
                        </div>
                        <!--Widget Event End-->
                        <!--Widget Categories Start-->
                        <div class="widget widget_categories">
                            <!--Widget Title Start-->
                            <h5 class="title">CATEGORÍAS</h5>
                            <!--Widget Title End-->
                            <ul>
                                <li><a href="#">ALOJAMIENTO</a></li>
                                <li><a href="#">Restaurante</a></li>
                                <li><a href="#">Piscina</a></li>
                                <li><a href="#">Eventos</a></li>
                                <li><a href="#">gym</a></li>
                                <li><a href="#">spa</a></li>
                                <li><a href="#">club</a></li>
                            </ul>
                        </div>
                        <!--Widget Categories End-->
                        <!--Widget Recent Post Start-->
                        <div class="widget widget-recent-post">
                            <!--Widget Title Start-->
                            <h5 class="title">POSTOS RECIENTES</h5>
                            <!--Widget Title End-->
                            <!--Event List Start-->
                            <div class="widget-event-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/w-event4.jpg')}}" alt="oscarthemes">
                                </figure>
                                <div class="text-overflow">
                                    <h5 class="title"><a href="event-detail.html">RECONSTRUCCIÓN DE LA SUITE KING</a></h5>
                                    <p>Las terrazas y balcones privados llevan su espacio vital al exterior.</p>
                                </div>
                            </div>
                            <!--Event List End-->
                            <!--Event List Start-->
                            <div class="widget-event-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/w-event5.jpg')}}" alt="oscarthemes">
                                </figure>
                                <div class="text-overflow">
                                    <h5 class="title"><a href="event-detail.html">WE TIENE UNA HABITACIÓN NUEVA</a></h5>
                                    <p>Las terrazas y balcones privados llevan su espacio vital al exterior.</p>
                                </div>
                            </div>
                            <!--Event List End-->
                            <!--Event List Start-->
                            <div class="widget-event-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/w-event6.jpg')}}" alt="oscarthemes">
                                </figure>
                                <div class="text-overflow">
                                    <h5 class="title"><a href="event-detail.html">HABITACIONES CON VISTAS A LA PISCINA</a></h5>
                                    <p>Las terrazas y balcones privados llevan su espacio vital al exterior.</p>
                                </div>
                            </div>
                            <!--Event List End-->
                        </div>
                        <!--Widget Recent Post End-->
                        <!--Widget Archive Start-->
                        <div class="widget widget_archive">
                            <!--Widget Title Start-->
                            <h5 class="title">Archivos</h5>
                            <!--Widget Title End-->
                            <ul>
                                <li><a href="#">May 16 , 2017</a>(21)</li>
                                <li><a href="#">May 17 , 2017</a>(12)</li>
                                <li><a href="#">May 18 , 2017</a>(23)</li>
                                <li><a href="#">May 19 , 2017</a>(32)</li>
                            </ul>
                        </div>
                        <!--Widget Archive End-->
                    </div>
                    <!--Side Bar End-->
                </aside>
            </div>
        </div>
    </section>
    <!--Event Detail Section End-->
</div>
<!--News Letter Wrap Start-->

</div>

@endsection
