@extends('frontend.layouts.app')

@section('content')
<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Detalle del blog</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Detalle del blog</li>
        </ol>
    </div>
</div>
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Blog Section Start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--Blog Detail Start-->
                    <div class="chr-blog-small chr-blog-detail">
                        <figure>
                            <img src="{{ asset('frontend/extra-images/img-d1.jpg') }}" alt="oscarthemes">
                            <div class="s-date-box">
                                <span>24</span>
                                <p>Enero 2017</p>
                            </div>
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="blog-detail.html">Live the Life in Bali National Hotel</a></h5>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-user"></i><span>Admin</span></a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i><span>3 Comentarios</span></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i><span>30 Me Gustas</span></a></li>
                            </ul>
                            <p>Las terrazas y balcones privados sacan su espacio vital al exterior. Sus orígenes se remontan a la visión de un comerciante de vinos francés, la casa pronto evolucionó hasta convertirse en un centro de glamour e inspiración para las figuras literarias y artísticas de la habitación del hotel Alójese dos noches o más en fechas seleccionadas y le obsequiaremos con todo lo que necesita para escribir su propia historia de amor en el Hotel de lujo. El ambiente de la residencia hotelera se recrea en las zonas públicas del hotel.</p>
                                <p>Cada una de nuestras habitaciones es un viaje único. El edificio de Regent Street también resort The Club, un lujo que cuenta con una galería para exposiciones temporales y resort de artistas contemporáneos como room resort o hotel room & hotel Beach Resort es un íntimo, hotel escapada romántica sólo para Adultos (18+) , situado en las arenas de polvo blanco de Eagle Beach, hotel Stay relaxed, estancia productiva, y la estancia en el corazón del hotel cerca de la estación de tren principal y a pocos minutos del museo de arte moderno de Hamburgo hotel Cada suite del complejo ofrece una sensación de la habitación y está amueblada individualmente con su propia decoración única y características de diseño, tales como chimeneas originales de la chimenea, habitación individual y ventanas de la bahía. </p>
                            <!--Blockquote Start-->
                            <blockquote>
                                <P>Each of our rooms is a unique journey. The building at Regent Street also Club, a luxury featuring a gallery for temporary exhibitions ...</P>
                            </blockquote>
                            <!--Blockquote End-->
                            <p>Cada una de nuestras habitaciones es un viaje único. El edificio de Regent Street también resort The Club, un lujo que cuenta con una galería para exposiciones temporales y resort de artistas contemporáneos como habitación resort o habitación hotel & hotel Beach Resort es un íntimo, hotel escapada romántica...</p>
                            <!--Blog Detail Thumb Start-->
                            <div class="blog-detail-thumb">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7">
                                        <figure>
                                            <img src="{{ asset('frontend/extra-images/img-d2.jpg') }}" alt="oscarthemes"/>
                                        </figure>
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        <figure>
                                            <img src="{{ asset('frontend/extra-images/img-d3.jpg') }}" alt="oscarthemes"/>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <!--Blog Detail Thumb End-->
                            <p>Sólo para adultos (18+) , situado en las blancas arenas de Eagle Beach, el hotel se mantiene relajado, se mantiene productivo, y se mantiene en el corazón del hotel cerca de la estación principal de tren y a pocos minutos del museo de arte moderno Hamburger hotel Cada Suite del resort proporciona una sensación de habitación y está amueblada individualmente con su propia decoración y características de diseño únicas, tales como chimeneas originales, ...</p>
                            <!--Social Wrap Start-->
                            <div class="chr-social-wrap">
                                <ul class="chr-social">
                                    <li class="social_title"><strong>Compartir:</strong></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <div class="page-navigation">
                                    <a href="blog-detail.html"><i class="fa fa-arrow-left"></i>Anteriormente</a>
                                    <a href="blog-detail.html">Siguiente<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--Social Wrap End-->
                        </div>
                    </div>
                    <!--Blog Detail End-->
                    <!--Comment Wrap Start-->
                    <div class="chr-comment-wrap">
                        <!--Heading Title Start-->
                        <h5 class="heading-title">Comentarios 4</h5>
                        <!--Heading Title End-->
                        <!--Comment Start-->
                        <ul class="comment">
                            <li>
                                <!--Comment Thumb Start-->
                                <div class="comment-thumb flex-text">
                                    <figure>
                                        <img src="{{ asset('frontend/extra-images/ct-1.jpg') }}" alt="oscarthemes"/>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">Merry John</a><span>March , 2017</span></h5>
                                        <p>Duis aute irure dolor in reprehenderit in vol utate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                        <a class="comment-reply-link" href="#">Respuesta</a>
                                    </div>
                                </div>
                                <!--Comment Thumb End-->
                                <!--Comment Children Start-->
                                <ul class="children">
                                    <li>
                                        <!--Comment Thumb Start-->
                                        <div class="comment-thumb flex-text">
                                            <figure>
                                                <img src="{{ asset('frontend/extra-images/ct-1.jpg') }}" alt="oscarthemes"/>
                                            </figure>
                                            <div class="text">
                                                <h5 class="title"><a href="#">Merry John</a><span>March , 2017</span></h5>
                                                <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                                <a class="comment-reply-link" href="#">Respuesta</a>
                                            </div>
                                        </div>
                                        <!--Comment Thumb End-->
                                    </li>
                                </ul>
                                <!--Comment Children End-->
                            </li>
                            <li>
                                <!--Comment Thumb Start-->
                                <div class="comment-thumb flex-text">
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/ct-1.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">Merry John</a><span>March , 2017</span></h5>
                                        <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                        <a class="comment-reply-link" href="#">Respuesta</a>
                                    </div>
                                </div>
                                <!--Comment Thumb End-->
                            </li>
                            <li>
                                <!--Comment Thumb Start-->
                                <div class="comment-thumb flex-text">
                                    <figure>
                                        <img src="{{asset ('frontend/extra-images/ct-1.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">Merry John</a><span>March , 2017</span></h5>
                                        <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                        <a class="comment-reply-link" href="#">Respuesta</a>
                                    </div>
                                </div>
                                <!--Comment Thumb End-->
                            </li>
                            <li>
                                <!--Comment Thumb Start-->
                                <div class="comment-thumb flex-text">
                                    <figure>
                                        <img src="{{asset ('frontend/extra-images/ct-1.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">Merry John</a><span>March , 2017</span></h5>
                                        <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                        <a class="comment-reply-link" href="#">Respuesta</a>
                                    </div>
                                </div>
                                <!--Comment Thumb End-->
                            </li>
                        </ul>
                        <!--Comment End-->
                    </div>
                    <!--Comment Wrap End-->
                    <!--Comment Wrap End-->
                    <div class="comment-form">
                        <!--Heading Title Start-->
                        <h5 class="heading-title">Leave a Comment</h5>
                        <!--Heading Title End-->
                        <form>
                            <!--Divider Start-->
                            <div class="input-divider row">
                                <div class="col-md-6 col-sm-6">
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <input type="text" placeholder="Su nombre">
                                    </div>
                                    <!--Input Field End-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <!--Input Field Start-->
                                    <div class="input-field">
                                        <input type="text" placeholder="Su correo electrónico">
                                    </div>
                                    <!--Input Field End-->
                                </div>
                            </div>
                            <!--Divider End-->
                            <!--Input Field Start-->
                            <div class="input-field">
                                <textarea placeholder="Su mensaje"></textarea>
                            </div>
                            <!--Input Field End-->
                            <!--Input Field Start-->
                            <div class="input-field">
                                <input type="submit" value="Enviar ahora">
                            </div>
                            <!--Input Field End-->
                        </form>
                    </div>
                </div>
                <aside class="col-md-4">
                    <!--Side Bar Start-->
                    <div class="chr-sidebar">
                        <!--Widget Search Start-->
                        <div class="widget widget-search">
                            <!--Input Field Start-->
                            <div class="input-field">
                                <input type="text" placeholder="Buscar cualquier cosa">
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
                            <h5 class="title">Etiquetas</h5>
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
                    <!--Widget Archive Start-->
                    <div class="widget widget_tag_cloud">
                        <!--Widget Title Start-->
                        <h5 class="title">Tags</h5>
                        <!--Widget Title End-->
                        <div class="tagcloud">
                            <a class="tag" href="#">Hotel</a>
                            <a class="tag" href="#">Reservar</a>
                            <a class="tag" href="#">Habitación</a>
                            <a class="tag" href="#">Blog</a>
                            <a class="tag" href="#">estilo de vida</a>
                            <a class="tag" href="#">Galería de imágenes en miniatura</a>
                            <a class="tag" href="#">Hotel</a>
                            <a class="tag" href="#">Reservar</a>
                            <a class="tag" href="#">Habitación</a>
                        </div>
                    </div>
                    <!--Widget Archive End-->
                </aside>
            </div>
        </div>
    </section>
    <!--Blog Section End-->
</div>
@endsection
