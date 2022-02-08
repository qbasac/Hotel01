@extends('frontend.layouts.app')

@section('content')
@section('name')
    <link rel="stylesheet" href="style.css">
@endsection

<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Nuestros eventos</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Eventos</li>
        </ol>
    </div>
</div>
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Event List Section Start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--Event List Start-->
                    <div class="chr-blog-small event-list flex-text">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-elt1.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo ex amet elitr. Ne essent feugiat vim, et soluta reprimique instructior mel, ne nonumes deserunt. Vix in dico vivendum ...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Event List End-->
                    <!--Event List Start-->
                    <div class="chr-blog-small event-list flex-text">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-elt2.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo ex amet elitr. Ne essent feugiat vim, et soluta reprimique instructior mel, ne nonumes deserunt. Vix in dico vivendum ...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Event List End-->
                    <!--Event List Start-->
                    <div class="chr-blog-small event-list flex-text">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-elt3.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo ex amet elitr. Ne essent feugiat vim, et soluta reprimique instructior mel, ne nonumes deserunt. Vix in dico vivendum ...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Event List End-->
                    <!--Event List Start-->
                    <div class="chr-blog-small event-list flex-text">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-elt4.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo ex amet elitr. Ne essent feugiat vim, et soluta reprimique instructior mel, ne nonumes deserunt. Vix in dico vivendum ...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Event List End-->
                    <!--Event List Start-->
                    <div class="chr-blog-small event-list flex-text">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-elt5.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo ex amet elitr. Ne essent feugiat vim, et soluta reprimique instructior mel, ne nonumes deserunt. Vix in dico vivendum ...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Event List End-->
                    <!--Event List Start-->
                    <div class="chr-blog-small event-list flex-text">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-elt6.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem ipsum dolor sit amet, quo odio atqui tamquam eu, duo ex amet elitr. Ne essent feugiat vim, et soluta reprimique instructior mel, ne nonumes deserunt. Vix in dico vivendum ...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Event List End-->
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
                                    <h5 class="title"><a href="event-detail.html">TENEMOS UNA HABITACIÓN NUEVA</a></h5>
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
    <!--Event List Section End-->
</div>
<!--News Letter Wrap Start-->

</div>

@endsection
