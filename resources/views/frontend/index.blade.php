<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="HTML5 Template, Hotels near me, Motel, booking hotel,hotel booking,rooms,discounted,offers,deals,last minute,hotels,oscarthemes,Oscar Themes,Jasmine Hotel" >
    <meta name="description" content="Discover Oscar Themes - Jasmine Hotel HTML5 Template, Hotel, Travel,Top Destinations Discover responsive Bootstrap templates, & HTML templates," >
    <meta name="theme-color" content="#f4b843">
    <title>About Us Hotel</title>
    <link href="{{ asset('frontend/css/css-plugin-collection.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/typography.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/shortcodes.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
    <link rel="icon" sizes="192x192" href="images/favicon/icon-192x192.png">

    @yield('style')
</head>
    <body>
        <!-- LOADER -->
        <div id="loader-overflow">
          <div id="loader3" class="loader-cont">Please enable JS</div>
        </div>
        <div class="chr-wrapper">
            <header class="sticky-header header-1">
                <!-- Top Bar Start -->
                <div class="chr-top-bar">
                    <div class="pull-left">
                        <div class="chr-top-info"><i class="fa fa-phone"></i><span>+92 - 33267 -124589</span></div>
                        <div class="chr-top-info email-info"><i class="fa fa-envelope"></i><span>oscarthemes@gmail.com</span></div>
                    </div>
                    <div class="pull-right">
                        <ul class="chr-social rd-0">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
                        </ul>
                        <a class="chr-top-info chr-admin" href="signup.html">
                            <i class="fa fa-user"></i>
                            <span>Signup</span>
                        </a>
                    </div>
                </div>
                <!-- Top Bar Start -->
                <!-- Top Bar Start -->
                <div class="chr-logo-outer">
                    <div class="container">
                        <div class="navigation-outer">
                            <nav class="navigation pull-left">
                                <ul>
                                    <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
                                    <li class="{{ \Request::path() == 'nosotros' ? 'active' : ''}}"><a href="{{ route('nosotros') }}"> Sobre nosotros</a></li>
                                    <li ><a href="{{ route('habitacion.index') }}">Habitaciones</a>
                                    </li>
                                    <li><a href="#">Evento</a>
                                        <ul class="children">
                                            <li><a href="{{-- route('evento-pequeño')  --}}">Evento Pequeño</a></li>
                                            <li><a href="{{-- route('evento-mediano')  --}}">Evento Medio</a></li>
                                            <li><a href="{{-- route('evento-grande')  --}}">Evento grande</a></li>
                                            <li><a href="{{-- route('evento-lista') --}}">Lista de eventos</a></li>
                                            <li><a href="{{-- route('evento-detalle') --}}">Detalle del evento</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <h1 class="logo">
                                <a href="#"><img src="{{ asset('frontend/images/hotel-logo.png') }}" alt="Oscar Themes"/></a>
                            </h1>
                            <nav class="navigation pull-right">
                                <ul>
                                    <li><a href="#">Blog</a>
                                        <ul class="children">
                                            <li><a href="{{-- route('lateral-blog') --}}">Blog con Side</a></li>
                                            <li><a href="{{-- route('pequeño-blog') --}}">Blog Pequeño</a></li>
                                            <li><a href="{{-- route('mediano-blog') --}}">Blog Medio</a></li>
                                            <li><a href="{{-- route('grande-blog')  --}}">Blog Grande</a></li>
                                            <li><a href="{{-- route('lista-blog')  --}}">Lista de blogs</a></li>
                                            <li><a href="{{-- route('detalle-blog')  --}}">Detalle del blog</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Galerí DASDADAa</a>
                                        <ul class="children">
                                            <li><a href="{{-- route('galeria-maposteria') --}}">Galería de mampostería</a></li>
                                            <li><a href="{{-- route('galeria-simple') --}}">Galería simple</a></li>
                                        </ul>
                                    </li>
                                    <li class="last">
                                        <a href="#">Páginas</a>
                                        <ul class="children">
                                            <li><a href="{{-- route('404') --}}">404</a></li>
                                            <li><a href="{{-- route('personal-pagina') --}}">Personal</a></li>
                                            <li><a href="{{-- route('acceso-pagina') --}}">Inicio de sesión</a></li>
                                            <li><a href="{{-- route('inscribase-pagina') --}}">Inscríbase en</a></li>
                                            <li><a href="{{-- route('comingsoon-paginas') --}}">Comingsoon</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{-- route('contacto') --}}">Contacto con nosotros</a>
                                    </li>
                                </ul>
                            </nav>
                            <!--DL Menu Start-->


                            {{-- <div id="mg-responsive-navigation" class="dl-menuwrapper">
                                <button class="dl-trigger">Abrir el menú</button>
                                <ul class="dl-menu">
                                    <li class="menu-item mg-parent-menu">
                                        <a href="{{ route('home')}}">Inicio</a>
                                    </li>
                                    <li><a href="about-us.html">Sobre nosotros</a></li>
                                    <li class="menu-item mg-parent-menu"><a href="#">Habitaciones</a>
                                        <ul class="dl-submenu">
                                            <li><a href="{{ route('habitacion')}}">Nuestras habitaciones</a></li>
                                            <li><a href="">Lista de habitaciones</a></li>
                                            <li><a href="{{ route('habitacion-detalle')}}">Detalle de la habitación</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item mg-parent-menu"><a href="#">Blog</a>
                                        <ul class="dl-submenu">
                                            <li><a href="{{ route('lateral-blog')}}">Blog con Side</a></li>
                                            <li><a href="{{ route('pequeño-blog')}}l">Blog Pequeño</a></li>
                                            <li><a href="{{ route('mediano-blog')}}">Blog Medio</a></li>
                                            <li><a href="{{ route('grande-blog') }}">Blog Grande</a></li>
                                            <li><a href="{{ route('lista-blog')}}">Lista de blogs</a></li>
                                            <li><a href="{{ route('detalle-blog') }}">Detalle del blog</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item mg-parent-menu"><a href="#">Evento</a>
                                        <ul class="children">
                                            <li><a href="{{ route('evento-pequeño')}}">Evento Pequeño</a></li>
                                            <li><a href="{{ route('evento-mediano')}}">Evento Medio</a></li>
                                            <li><a href="{{ route('evento-grande')}}">Evento grande</a></li>
                                            <li><a href="{{ route('evento-lista')}}">Lista de eventos</a></li>
                                            <li><a href="{{ route('evento-detalle')}}">Detalle del evento</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item mg-parent-menu"><a href="#">Galería</a>
                                        <ul class="dl-submenu">
                                            <li><a href="{{ route('galeria-maposteria') }}">Galería de mampostería</a></li>
                                            <li><a href="{{ route('galeria-simple') }}">Galería simple</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item mg-parent-menu"><a href="#">Páginas</a>
                                        <ul class="dl-submenu">
                                            <li><a href="{{ route('404') }}">404</a></li>
                                            <li><a href="{{ route('personal-pagina') }}">Personal</a></li>
                                            <li><a href="{{ route('acceso-pagina') }}">Inicio de sesión</a></li>
                                            <li><a href="{{ route('inscribase-pagina') }}">Inscríbase en</a></li>
                                            <li><a href="{{ route('comingsoon-paginas') }}">Comingsoon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item mg-parent-menu"><a href="{{ route ('contacto')}}">Contacto con nosotros</a></li>
                                </ul>
                            </div> --}}

                        </div>
                    </div>
                </div>
                <!-- Top Bar Start -->
            </header>
<div  class="chr_banner banner-hotel">
    <ul class="slider arrows">
        <li class="">
            <!--Banner Thumb START-->
            <div>
                <img src="{{asset('frontend/extra-images/banner-01.jpg')}}" alt="Image here">
                <div class="chr-caption-wrapper">
                    <div class="chr_banner_caption container">
                        <div class="chr-caption">
                            <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-title">Ven a nosotros</h6>
                            <h6 data-animation="fadeInUp" data-delay="0.5s" class="chr-caption-text">El hogar lejos del hogar</h6>
                            <p data-animation="fadeInUp" data-delay="1s" class="chr-caption-contant">
                                Reserve ahora una habitación en nuestro Hotel y obtenga un descuento del 30%. Le esperan una cesta de frutas, refrescos y una cama acogedora. Haremos todo lo posible para que se sienta como en casa.
                            </p>
                            <a href="blog-detail.html" data-animation="fadeInLeft" data-delay="1.3s" class="chr-btn fancy-btn">Explorar</a>
                            <a href="#" data-animation="fadeInRight" data-delay="1.3s" class="chr-btn fancy-btn">Bok Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Thumb End-->
        </li>
        <li class="">
            <!--Banner Thumb START-->
            <div>
                <img src="{{asset('frontend/extra-images/banner-02.jpg')}}" alt="Image here">
                <div class="chr-caption-wrapper">
                    <div class="chr_banner_caption container">
                        <div class="chr-caption">
                            <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-title">Ven a nosotros</h6>
                            <h6 data-animation="fadeInUp" data-delay="0.5s" class="chr-caption-text">El hogar lejos del hogar</h6>
                            <p data-animation="fadeInUp" data-delay="1s" class="chr-caption-contant">
                                Reserve ahora una habitación en nuestro Hotel y obtenga un descuento del 30%. Le esperan una cesta de frutas, refrescos y una cama acogedora. Haremos todo lo posible para que se sienta como en casa.
                            </p>
                            <a href="blog-detail.html" data-animation="fadeInLeft" data-delay="1.3s" class="chr-btn fancy-btn">Explorar</a>
                            <a href="#" data-animation="fadeInRight" data-delay="1.3s" class="chr-btn fancy-btn">Bok Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Thumb End-->
        </li>
        <li class="">
            <!--Banner Thumb START-->
            <div>
                <img src="{{asset('frontend/extra-images/banner-03.jpg')}}" alt="Image here">
                <div class="chr-caption-wrapper">
                    <div class="chr_banner_caption container">
                        <div class="chr-caption">
                            <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-title">Ven a nosotros</h6>
                            <h6 data-animation="fadeInUp" data-delay="0.5s" class="chr-caption-text">El hogar lejos del hogar</h6>
                            <p data-animation="fadeInUp" data-delay="1s" class="chr-caption-contant">
                                Reserve ahora una habitación en nuestro Hotel y obtenga un descuento del 30%. Le esperan una cesta de frutas, refrescos y una cama acogedora. Haremos todo lo posible para que se sienta como en casa.
                            </p>
                            <a href="blog-detail.html" data-animation="fadeInLeft" data-delay="1.3s" class="chr-btn fancy-btn">Explorar</a>
                            <a href="#" data-animation="fadeInRight" data-delay="1.3s" class="chr-btn fancy-btn">Bok Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Thumb End-->
        </li>
    </ul>
    <!--Widget Booking Start-->
    <div class="widget widget-booking">
        <div class="booking-form">
            <!--Title Start-->
            <h3 class="title th-bd">Reserva de habitaciones</h3>
            <!--Title End-->
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-field">
                          RESERVA AHORA Y DISFRUTA DE UNA EXPERIENCIA DIFERENTE CON NOSOTROS
                        </div>
                    </div>
                </div>
                <!--Input Field Start-->
                <div class="input-field">
                    <input class="chr-btn th-bg" type="submit" value="Reservar ahora">
                </div>
                <!--Input Field End-->
            </form>
        </div>
    </div>
    <!--Widget Booking End-->
</div>
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Offers Section Start-->
    <section>
        <div class="container">
            <!--Heading 1 Start-->
            <div class="headind-1 text-center">
                <h3 class="title">Nuestras ofertas especiales</h3>
            </div>
            <!--Heading 1 End-->
            <div class="row">
               <!-- <ul class="port-grid masonry clearfix items-grid">-->
                    <!-- Event Thum Start -->
                    <li class="port-item col-md-4 col-sm-6">
                        <div class="fancy-effect">
                            <a href="#" class="chr-event-thumb fancy-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/pkg-img1.jpg')}}" alt="Oscar Themes"/>
                                </figure>
                                <div class="text p-middel">
                                    <p>Oferta de la pareja Crusie  </p>
                                    <h3 class="th-cl">60% <sup>Fuera de</sup></h3>
                                    <p>Reserve con antelación y ahorre </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <!-- Event Thum End -->
                    <!-- Event Thum Start -->
                    <li class="port-item col-md-4 col-sm-6">
                        <div class="fancy-effect">
                            <a href="#" class="chr-event-thumb fancy-thumb event-arrived">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/pkg-img3.jpg')}}" alt="Oscar Themes"/>
                                </figure>
                                <div class="text p-middel">
                                    <h3>Refresca tu mente</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and is the best inisistin typesetting industry. Lorem Ipsum has been ..</p>
                                    <h3>Inicio 08 : 30 p. m</h3>
                                </div>
                                <div class="event-ticket-link th-bg"><em>Entrada</em><span>$50</span></div>
                            </a>
                        </div>
                    </li>
                    <!-- Event Thum End -->
                    <!-- Event Thum Start -->
                    <li class="port-item col-md-4 col-sm-6">
                        <div class="fancy-effect">
                            <a href="#" class="chr-event-thumb fancy-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/pkg-img2.jpg')}}" alt="Oscar Themes"/>
                                </figure>
                                <div class="text p-middel">
                                    <p>Oferta Familia Feliz  </p>
                                    <h3 class="th-cl">30% <sup>Fuera de</sup></h3>
                                    <p>Reserve con antelación y ahorre </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <!-- Event Thum End -->
                    <!-- Event Thum Start -->
                    <li class="port-item col-md-4 col-sm-6">
                        <div class="fancy-effect">
                            <a href="#" class="chr-event-thumb fancy-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/pkg-img4.jpg')}}" alt="Oscar Themes"/>
                                </figure>
                                <div class="text p-middel">
                                    <p>Grupos y entretenimiento</p>
                                    <h3 class="th-cl">40% <sup>Fuera de</sup></h3>
                                    <p>Reserve con antelación y ahorre </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <!-- Event Thum End -->
                    <!-- Event Thum Start -->
                    <li class="port-item col-md-4 col-sm-6">
                        <div class="fancy-effect">
                            <a href="#" class="chr-event-thumb fancy-thumb">
                                <figure>
                                    <img src="{{asset('frontend/extra-images/pkg-img5.jpg')}}" alt="Oscar Themes"/>
                                </figure>
                                <div class="text p-middel">
                                    <p>Buffet y Restaurante</p>
                                    <h3 class="th-cl">35% <sup>Fuera de</sup></h3>
                                    <p>Reserve con antelación y ahorre </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <!-- Event Thum End -->
                </ul>
            </div>
        </div>
    </section>
    <!--Offers Section End-->
    <!--Services Tabs Section Start-->
    <section data-stellar-background-ratio="0.5"  class="parallax-section services-bg">
        <div class="container">
            <!--Heading 1 Start-->
            <div class="headind-1 white text-center">
                <h3 class="title">Nuestros servicios</h3>
            </div>
            <!--Heading 1 End-->
            <div class="chr-main-services">
                <!-- Nav tabs Start -->
                <ul class="main-services-tab" role="tablist">
                    <li class="active" role="presentation"><a href="#spa" aria-controls="spa" role="tab" data-toggle="tab">Spa</a></li>
                    <li role="presentation"><a href="#gym" aria-controls="gym" role="tab" data-toggle="tab">Gym</a></li>
                    <li role="presentation"><a href="#restaurante" aria-controls="restaurante" role="tab" data-toggle="tab">RESTAURANTES</a></li>
                    <li role="presentation"><a href="#animate" aria-controls="animate" role="tab" data-toggle="tab">Aminities</a></li>
                </ul>
                <!-- Nav tabs End -->
                <!-- Tab panes Start -->
                <div class="tab-content">
                    <!-- Tabs Panel Start -->
                    <div role="tabpanel" class="tab-pane active" id="spa">
                        <!--About Us Inner Wrap Start-->
                        <div class="chr-about-wrap">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <figure class="fancy-btn">
                                        <img src="{{asset('frontend/extra-images/about-spa.jpg')}}" alt="Oscar Themes"/>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="text">
                                        <h3 class="title">Spa</h3>
                                        <p>Lorem ipsum dolor sit amet, maiestatis scriptorem at duo, mei ne porro pertinacia repudiandae. Nisl possim delicata nam et, saepe gubergren sed eu. Regione detracto petentium qui id. Ut nusquam recusabo eos, justo accusam sea et. Nostro commune.</p>
                                        <ul class="chr-sr-list">
                                            <li>Waterbom Bali</li>
                                            <li>Experiencia de seguimiento</li>
                                            <li>Pueblo de Mayong </li>
                                            <li>Cascadas de Sekumpul</li>
                                            <li>Palacio del Agua de Ujung</li>
                                            <li>Tirta Gangga</li>
                                            <li>Buceo y snorkel</li>
                                            <li>Visitas en barco</li>
                                        </ul>
                                        <a href="#" class="chr-btn fancy-btn">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--About Us Inner Wrap End-->
                    </div>
                    <!-- Tabs Panel End -->
                    <!-- Tabs Panel Start -->
                    <div role="tabpanel" class="tab-pane" id="gym">
                        <!--About Us Inner Wrap Start-->
                        <div class="chr-about-wrap">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <figure class="fancy-btn">
                                        <img src="{{asset('frontend/extra-images/about-gym.jpg')}}" alt="Oscar Themes"/>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="text">
                                        <h3 class="title">Gym</h3>
                                        <p>Lorem ipsum dolor sit amet, maiestatis scriptorem at duo, mei ne porro pertinacia repudiandae. Nisl possim delicata nam et, saepe gubergren sed eu. Regione detracto petentium qui id. Ut nusquam recusabo eos, justo accusam sea et. Nostro commune. </p>
                                        <ul class="chr-sr-list">
                                            <li>Waterbom Bali</li>
                                            <li>Experiencia de seguimiento</li>
                                            <li>Pueblo de Mayong </li>
                                            <li>Cascadas de Sekumpul</li>
                                            <li>Palacio del Agua de Ujung</li>
                                            <li>Tirta Gangga</li>
                                            <li>Buceo y snorkel</li>
                                            <li>Visitas en barco</li>
                                        </ul>
                                        <a href="#" class="chr-btn fancy-btn">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--About Us Inner Wrap End-->
                    </div>
                    <!-- Tabs Panel End -->
                    <!-- Tabs Panel Start -->
                    <div role="tabpanel" class="tab-pane" id="restaurante">
                        <!--About Us Inner Wrap Start-->
                        <div class="chr-about-wrap">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <figure class="fancy-btn">
                                        <img src="{{asset('frontend/extra-images/about-restaurante.jpg')}}" alt="Oscar Themes"/>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="text">
                                        <h3 class="title">Restaurante</h3>
                                        <p>Lorem ipsum dolor sit amet, maiestatis scriptorem at duo, mei ne porro pertinacia repudiandae. Nisl possim delicata nam et, saepe gubergren sed eu. Regione detracto petentium qui id. Ut nusquam recusabo eos, justo accusam sea et. Nostro commune.</p>
                                        <ul class="chr-sr-list">
                                            <li>Waterbom Bali</li>
                                            <li>Experiencia de seguimiento</li>
                                            <li>Pueblo de Mayong </li>
                                            <li>Cascadas de Sekumpul</li>
                                            <li>Palacio del Agua de Ujung</li>
                                            <li>Tirta Gangga</li>
                                            <li>Buceo y snorkel</li>
                                            <li>Visitas en barco</li>
                                        </ul>
                                        <a href="#" class="chr-btn fancy-btn">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--About Us Inner Wrap End-->
                    </div>
                    <!-- Tabs Panel End -->
                    <!-- Tabs Panel Start -->
                    <div role="tabpanel" class="tab-pane" id="animate">
                        <!-- Aminities List Start -->
                        <ul class="aminities-list">
                            <li>
                                <!-- Aminities Thumb Start -->
                                <div class="aminities-thumb">
                                    <span class="chricon-transport-1">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                    </span>
                                    <h6>Dormitorio principal</h6>
                                </div>
                                <!-- Aminities Thumb End -->
                            </li>
                            <li>
                                <!-- Aminities Thumb Start -->
                                <div class="aminities-thumb">
                                    <span class="chricon-transport-1">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                    </span>
                                    <h6>Servicio de recogida y entrega</h6>
                                </div>
                                <!-- Aminities Thumb End -->
                            </li>
                            <li>
                                <!-- Aminities Thumb Start -->
                                <div class="aminities-thumb">
                                    <span class="chricon-transport-1">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                    </span>
                                    <h6>Cajero automático disponible</h6>
                                </div>
                                <!-- Aminities Thumb End -->
                            </li>
                            <li>
                                <!-- Aminities Thumb Start -->
                                <div class="aminities-thumb">
                                    <span class="chricon-transport-1">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                    </span>
                                    <h6>Balcón con vistas al mar</h6>
                                </div>
                                <!-- Aminities Thumb End -->
                            </li>
                            <li>
                                <!-- Aminities Thumb Start -->
                                <div class="aminities-thumb">
                                    <span class="chricon-transport-1">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                    </span>
                                    <h6>Restaurante sabroso</h6>
                                </div>
                                <!-- Aminities Thumb End -->
                            </li>
                            <li>
                                <!-- Aminities Thumb Start -->
                                <div class="aminities-thumb">
                                    <span class="chricon-transport-1">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                    </span>
                                    <h6>Wifi gratuito</h6>
                                </div>
                                <!-- Aminities Thumb End -->
                            </li>
                            <li>
                                <!-- Aminities Thumb Start -->
                                <div class="aminities-thumb">
                                    <span class="chricon-transport-1">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                    </span>
                                    <h6>Se admiten animales de compañía</h6>
                                </div>
                                <!-- Aminities Thumb End -->
                            </li>
                            <li>
                                <!-- Aminities Thumb Start -->
                                <div class="aminities-thumb">
                                    <span class="chricon-transport-1">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span>
                                    </span>
                                    <h6>Servicio de habitaciones 24 / 7</h6>
                                </div>
                                <!-- Aminities Thumb End -->
                            </li>
                        </ul>
                        <!-- Aminities List End -->
                    </div>
                    <!-- Tabs Panel End -->
                </div>
                <!-- Tab panes End -->
            </div>
        </div>
    </section>
    <!--Services Tabs Section End-->
    <!--Staff Section Start-->
    <section>
        <div class="container">
            <!--Heading 1 Start-->
            <div class="headind-1 text-center">
                <h3 class="title">Nuestro personal especial</h3>
            </div>
            <!--Heading 1 End-->
            <div class="chr-staff-slider">
                <!--Staff Thumb Start-->
                <div class="col-md-3 col-sm-6">
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
                            <h4 class="title"><a href="#">Daniel Braim</a></h4>
                            <span class="designation">Gerente</span>
                        </div>
                    </div>
                </div>
                <!--Staff Thumb End-->
                <!--Staff Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="chr-staff-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-2.png')}}" alt="oscarthemes"/>
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
                            <h4 class="title"><a href="#">Daniel Braim</a></h4>
                            <span class="designation">Gerente</span>
                        </div>
                    </div>
                </div>
                <!--Staff Thumb End-->
                <!--Staff Thumb Start-->
                <div class="col-md-3 col-sm-6">
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
                            <h4 class="title"><a href="#">Daniel Braim</a></h4>
                            <span class="designation">Gerente</span>
                        </div>
                    </div>
                </div>
                <!--Staff Thumb End-->
                <!--Staff Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="chr-staff-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-4.png')}}" alt="oscarthemes"/>
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
                            <h4 class="title"><a href="#">Daniel Braim</a></h4>
                            <span class="designation">Gerente</span>
                        </div>
                    </div>
                </div>
                <!--Staff Thumb End-->
                <!--Staff Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="chr-staff-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-4.png')}}" alt="oscarthemes"/>
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
                            <h4 class="title"><a href="#">Daniel Braim</a></h4>
                            <span class="designation">Gerente</span>
                        </div>
                    </div>
                </div>
                <!--Staff Thumb End-->
            </div>
        </div>
    </section>
    <!--Staff Section End-->
    <!--Testimonial Section Start-->
    <section data-stellar-background-ratio="0.5" class="parallax-section hotel-testimonial-bg">
        <div class="container">
            <!--Heading 1 Start-->
            <div class="headind-1 white text-center">
                <h3 class="title">Testimonios</h3>
            </div>
            <!--Heading 1 End-->
            <div class="hotel-testimonial arrows">
                <!--Testimonial Thumb Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="hotel-testimonial-thumb">
                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and is the best inisistin typesetting industry. Lorem Ipsum has been the industry's has been  theisstandard dummy text ever since.dummy text of the printing and is the best inis typesetting industry. Lorem Ipsum has been the industry's has be</p>
                            <div class="rating-thumb">
                                <label>Califica</label>
                                <div class="rating_down">
                                    <div style="width: 90%;" class="rating_up"></div>
                                </div>
                            </div>
                        </div>
                        <div class="user-th">
                            <div class="overflow-text">
                                <h6 class="title"><a href="#">Gary Christian</a></h6>
                                <span class="sub-title">Invitado perfecto</span>
                            </div>
                            <figure>
                                <img src="{{asset('frontend/extra-images/testimonial1.jpg')}}" alt="Oscar Themes"/>
                            </figure>
                        </div>
                    </div>
                </div>
                <!--Testimonial Thumb End-->
                <!--Testimonial Thumb Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="hotel-testimonial-thumb">
                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and is the best inisistin typesetting industry. Lorem Ipsum has been the industry's has been  theisstandard dummy text ever since.dummy text of the printing and is the best inis typesetting industry. Lorem Ipsum has been the industry's has bee</p>
                            <div class="rating-thumb">
                                <label>Califica</label>
                                <div class="rating_down">
                                    <div style="width: 100%;" class="rating_up"></div>
                                </div>
                            </div>
                        </div>
                        <div class="user-th">
                            <div class="overflow-text">
                                <h6 class="title"><a href="#">Gary Christian</a></h6>
                                <span class="sub-title">Invitado perfecto</span>
                            </div>
                            <figure>
                                <img src="{{asset('frontend/extra-images/testimonial2.jpg')}}" alt="Oscar Themes"/>
                            </figure>
                        </div>
                    </div>
                </div>
                <!--Testimonial Thumb End-->
                <!--Testimonial Thumb Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="hotel-testimonial-thumb">
                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and is the best inisistin typesetting industry. Lorem Ipsum has been the industry's has been  theisstandard dummy text ever since.dummy text of the printing and is the best inis typesetting industry. Lorem Ipsum has been the industry's has bee</p>
                            <div class="rating-thumb">
                                <label>Califica</label>
                                <div class="rating_down">
                                    <div style="width: 80%;" class="rating_up"></div>
                                </div>
                            </div>
                        </div>
                        <div class="user-th">
                            <div class="overflow-text">
                                <h6 class="title"><a href="#">Gary Christian</a></h6>
                                <span class="sub-title">Invitado perfecto</span>
                            </div>
                            <figure>
                                <img src="{{asset('frontend/extra-images/testimonial3.jpg')}}" alt="Oscar Themes"/>
                            </figure>
                        </div>
                    </div>
                </div>
                <!--Testimonial Thumb End-->
            </div>
        </div>
    </section>
    <!--Testimonial Section End-->
    <!--Rooms Section Start-->
    <section>
        <div class="container">
            <!--Heading 1 Start-->
            <div class="headind-1 text-center">
                <h3 class="title">Nuestras habitaciones</h3>
            </div>
            <!--Heading 1 End-->
            <div class="chr-roomslider arrows">
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room1.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 100</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="#">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 camas</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Sueños</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room2.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 200</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="#">Habitación de invitados tradicional</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room3.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 250</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="#">Habitación de invitados tradicional<</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
                <!--Room Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-room-thumb fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/room4.jpg')}}" alt="oscarthemes"/>
                            <a href="#" class="price-tag th-bg">$ 350</a>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="#">Habitación de lujo para huéspedes</a></h4>
                            <p>Lorem Ipsum which looks many web sites pass websites is there fore always.</p>
                            <ul class="blog-meta">
                                <li><i class="fa fa-bed th-cl"></i><span>2 Cama</span></li>
                                <li><i class="fa fa-user th-cl"></i><span>4 Duerme</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Room Thumb End-->
            </div>
        </div>
    </section>
    <!--Rooms Section End-->
    <!--Masonry Gallery Section Start-->
    <section class="gray-bg">
        <!--Heading 1 Start-->
        <div class="headind-1 text-center">
            <h3 class="title">Nuestra galería</h3>
        </div>
        <!--Heading 1 End-->
        <!--Gallery Navigation Start-->
        <ul class="port-filter text-center">
            <li>
                <a href="#" class="filter active" data-filter="*">Todos los proyectos                                                                                                                                                                                                                                                                                                                                                                                                                           </a>
            </li>
            <li>
                <a href="#" class="filter" data-filter=".gym">Gym</a>
            </li>
            <li>
                <a href="#" class="filter" data-filter=".spa">Spa</a>
            </li>
            <li>
                <a href="#" class="filter" data-filter=".hotel">Hotel</a>
            </li>
        </ul>
        <!--Gallery Navigation End-->
        <!--Gallery Grid Start-->

            <!--Masonry Item Start-->
            <li class="port-item col-md-3 col-sm-3 mix spa hotel gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img1.jpg')}}" alt="Oscar Themes">
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img1.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-6 col-sm-6 mix hotel gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img3.jpg')}}" alt="Oscar Themes">
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="{{asset('frontend/extra-images/mgallary-img3.jpg')}}">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 col-sm-3 mix hotel">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img2.jpg')}}" alt="Oscar Themes">
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img2.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 col-sm-3 mix spa gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img4.jpg')}}" alt="Oscar Themes">
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="{{asset('frontend/extra-images/mgallary-img4.jpg')}}">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 col-sm-3 mix hotel spa gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img5.jpg')}}" alt="Oscar Themes">
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="{{asset('frontend/extra-images/mgallary-img5.jpg')}}">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 col-sm-3 mix spa hotel">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img6.jpg')}}" alt="Oscar Themes">
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="{{asset('frontend/extra-images/mgallary-img6.jpg')}}">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
        </ul>
        <!--Gallery Grid End-->
    </section>
    <!--Masonry Gallery Section End-->
    <!--Blog Section Start-->
    <section>
        <div class="container">
            <!--Heading 1 Start-->
            <div class="headind-1 text-center">
                <h3 class="title">Nuestro blog</h3>
            </div>
            <!--Heading 1 End-->
            <div class="row">
                <!--Blog Small Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-blog-small">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-1.jpg')}}" alt="oscarthemes">
                            <div class="s-date-box">
                                <span>24</span>
                                <p>Jan 2017</p>
                            </div>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="blog-detail.html">La antigua cacería de huéspedes en el lado del río</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-user"></i><span>Admin</span></a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i><span>3 Comentarios</span></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i><span>30 Likes</span></a></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the asi printing and is the best inisistin type settinin industry. Lorem Ipsum...</p>
                            <a class="readmore-btn" href="#">Leer más</a>
                        </div>
                    </div>
                </div>
                <!--Blog Small End-->
                <!--Blog Small Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="chr-blog-small">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-2.jpg')}}" alt="oscarthemes">
                            <div class="s-date-box">
                                <span>24</span>
                                <p>Jan 2017</p>
                            </div>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="blog-detail.html">New Extensive View of Hotel</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-user"></i><span>Admin</span></a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i><span>3 Comments</span></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i><span>30 Likes</span></a></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the asi printing and is the best inisistin type settinin industry. Lorem Ipsum...</p>
                            <a class="readmore-btn" href="#">Leer más</a>
                        </div>
                    </div>
                </div>
                <!--Blog Small End-->
                <!--Blog Small Start-->
                <div class="col-md-4 hidden-sm">
                    <div class="chr-blog-small">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-3.jpg')}}" alt="oscarthemes">
                            <div class="s-date-box">
                                <span>24</span>
                                <p>Jan 2017</p>
                            </div>
                        </figure>
                        <div class="text">
                            <h4 class="title"><a href="blog-detail.html">MASAJE DE TEJIDO PROFUNDO</a></h4>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-user"></i><span>Admin</span></a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i><span>3 Comments</span></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i><span>30 Likes</span></a></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the asi printing and is the best inisistin type settinin industry. Lorem Ipsum...</p>
                            <a class="readmore-btn " href="#">Leer más</a>
                        </div>
                    </div>
                </div>
                <!--Blog Small End-->
            </div>
        </div>
    </section>
    <!--Blog Section End-->
    <!--Price Section Start-->
    <section class="gray-bg price-table-section">
        <div class="container">

            <!--Heading 1 Start-->
            <div class="headind-1 text-center">
                <h3 class="title">Nuestros precios</h3>
            </div>
            <!--Heading 1 End-->
            <div class="row">
                <!--Price Table Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="price-table">
                        <h4 class="title">$ 299 <sub>/ mes</sub></h4>
                        <figure>
                            <img src="{{asset('frontend/extra-images/price-img1.jpg')}}" alt="OscarThemes">
                        </figure>
                        <div class="text">
                            <p>Lorem Ipsum Dolor Sit Amet, is Consectetur Adipisicing A Elitie Orem Ipsum Dolor Sit Amet, is Consectetur...</p>
                            <ul class="chr-price-contant">
                                <li>Acceso ilimitado</li>
                                <li>2 días de formación gratuita </li>
                                <li>5 semanas de pase de gimnasio</li>
                                <li>1 Curso de fitness</li>
                                <li>Entrada ilimitada al gimnasio</li>
                            </ul>
                            <a style="text-align: center;" class="chr-btn fancy-btn" href="#">Comprar ahora</a>
                        </div>
                    </div>
                </div>
                <!--Price Table End-->
                <!--Price Table Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="price-table">
                        <h4 class="title">$ 399 <sub>/ 6 meses</sub></h4>
                        <figure>
                            <img src="{{asset('frontend/extra-images/price-img2.jpg')}}" alt="OscarThemes">
                        </figure>
                        <div class="text">
                            <p>Lorem Ipsum Dolor Sit Amet, is Consectetur Adipisicing A Elitie Orem Ipsum Dolor Sit Amet, is Consectetur...</p>
                            <ul class="chr-price-contant">
                                <li>Acceso ilimitado</li>
                                <li>2 días de formación gratuita </li>
                                <li>5 semanas de pase de gimnasio</li>
                                <li>1 Curso de fitness</li>
                                <li>Entrada ilimitada al gimnasio</li>
                            </ul>
                            <a class="chr-btn fancy-btn" href="#">Comprar Ahora</a>
                        </div>
                    </div>
                </div>
                <!--Price Table End-->
                <!--Price Table Start-->
                <div class="col-md-4 hidden-sm">
                    <div class="price-table">
                        <h4 class="title">$ 499 <sub>/ year</sub></h4>
                        <figure>
                            <img src="{{asset('frontend/extra-images/price-img3.jpg')}}" alt="OscarThemes">
                        </figure>
                        <div class="text">
                            <p>Lorem Ipsum Dolor Sit Amet, is Consectetur Adipisicing A Elitie Orem Ipsum Dolor Sit Amet, is Consectetur...</p>
                            <ul class="chr-price-contant">
                                <li>Acceso ilimitado</li>
                                <li>2 días de formación gratuita </li>
                                <li>5 semanas de pase de gimnasio</li>
                                <li>1 Curso de fitness</li>
                                <li>Entrada ilimitada al gimnasio</li>
                            </ul>
                            <a class="chr-btn fancy-btn" href="#">Comprar Ahora </a>
                        </div>
                    </div>
                </div>
                <!--Price Table End-->
            </div>
        </div>
    </section>
    <!--Price Section End-->
    <!--Brand Slider Start-->
    <div class="brnd-slider-wrap ">
        <div class="container">
            <div class="brnd-slider">
                <div>
                    <a href="#" class="thumb">
                        <img src="{{asset('frontend/extra-images/brand1.png')}}" alt="oscarthemes"/>
                    </a>
                </div>
                <div>
                    <a href="#" class="thumb">
                        <img src="{{asset('frontend/extra-images/brand2.png')}}" alt="oscarthemes"/>
                    </a>
                </div>
                <div>
                    <a href="#" class="thumb">
                        <img src="{{asset('frontend/extra-images/brand3.png')}}" alt="oscarthemes"/>
                    </a>
                </div>
                <div>
                    <a href="#" class="thumb">
                        <img src="{{asset('frontend/extra-images/brand4.png')}}" alt="oscarthemes"/>
                    </a>
                </div>
                <div>
                    <a href="#" class="thumb">
                        <img src="{{asset('frontend/extra-images/brand5.png')}}" alt="oscarthemes"/>
                    </a>
                </div>
                <div>
                    <a href="#" class="thumb">
                        <img src="{{asset('frontend/extra-images/brand6.png')}}" alt="oscarthemes"/>
                    </a>
                </div>
                <div>
                    <a href="#" class="thumb">
                        <img src="{{asset('frontend/extra-images/brand1.png')}}" alt="oscarthemes"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Brand Slider End-->
</div>
<!--News Letter Wrap Start-->
<section class="news-letter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h4 class="title">carta de noticias</h4>
            </div>
            <div class="col-md-6 col-sm-6">
                <!--Input Field Start-->
                <div class="input-field">
                    <div id="mc_embed_signup" class="nl-form-container clearfix">
                        <form action="https://twitter.us16.list-manage.com/subscribe/post-json?u=c768d55d7a9fca1c581bc5614&amp;id=6db56c6523&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>
                            <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Email address" required>
                            <div style="position: absolute; left: -5000px;">
                                <input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value="">
                            </div>
                            <label class="search_icon"><input id="mc-embedded-subscribe" type="submit" name="subscribe" value=""></label>
                        </form>
                        <div id="notification_container"></div>
                    </div>
                </div>
                <!--Input Field End-->
            </div>
        </div>
    </div>
</section>
<!--News Letter Wrap End-->
<!--Hotel Footer Start-->
<footer class="hotel-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <!--About Widget Start-->
                <div class="widget about-widget widget-info2">
                    <h4 class="widget-title"><span>Acerca de nosotros</span></h4>
                    <div class="text">
                        <p>Lorem Ipsum is simply dummy text of the printing iste and is the best inisistin typesetting industry.   theisstandar dis dummy text ever sinc...</p>
                        <!--About Text Thumb Start-->
                        <div class="about-text">
                            <span class="th-bg"><i class="fa fa-phone"></i></span>
                            <div class="overflow-text">
                                <address>1234 Fleming Road Manhatten 2 cross Newyork US</address>
                            </div>
                        </div>
                        <!--About Text Thumb End-->
                        <!--About Text Thumb Start-->
                        <div class="about-text">
                            <span class="th-bg"><i class="fa fa-phone"></i></span>
                            <div class="overflow-text">
                                <a href="#">+92 - 33267 -124589</a>
                                <a href="#">+92 - 33267 -124589</a>
                            </div>
                        </div>
                        <!--About Text Thumb End-->
                        <!--About Text Thumb Start-->
                        <div class="about-text">
                            <span class="th-bg"><i class="fa fa-envelope"></i></span>
                            <div class="overflow-text">
                                <a href="#">oscarthemes@gmail.com</a>
                                <a href="#">oscarthemes@gmail.com</a>
                            </div>
                        </div>
                        <!--About Text Thumb End-->
                    </div>
                </div>
                <!--About Widget End-->
            </div>
            <div class="col-md-4 col-sm-6">
                <!--Flickr Widget Start-->
                <div class="widget flicker-widget">
                    <h4 class="widget-title"><span>Flickr FeedFlickr Feed</span></h4>
                    <div >
                        <ul id="flickr-feeds" class="popup-gallery"></ul>
                    </div>
                </div>
                <!--Flickr Widget End-->
            </div>
            <div class="col-md-4 col-sm-12">


                <!--Twitter Widget Start-->
                <div class="widget twitter-widget">
                    <h4 class="widget-title"><span>Último Twitter</span></h4>
                    <ul class="tweet_list">
                        <li class="tweet_first tweet_odd">
                            <i class="fa fa-twitter"></i>
                            <samp class="tweet_time">
                                <a href="javascript:;" title="view tweet on twitter">hace unos 670 días</a></span>
                            <span class="tweet_text">Rebajas de invierno con descuentos de hasta el 50%.
                                <a href="javascript:;" class="tweet_hashtag">#Invierno</a>
                                <a href="javascript:;" class="tweet_hashtag">#venta</a>
                                <a href="javascript:;" class="tweet_hashtag">#oscarthemes</a>
                                <a href="javascript:;" class="tweet_hashtag" >#themeforest</a> Compruebe "Construcel - Responsiv...
                                <a href="javascript:;">twitter.com/i/web/status/1…</a></span>
                            </span>
                        </li>
                        <li class="tweet_even"><i class="fa fa-twitter"></i><span class="tweet_time">
                            <a href="javascript:;" title="view tweet on twitter">about 670 days ago</a></span>
                            <span class="tweet_text">Winter sale offering discounts up to 50%.
                                <a href="javascript:;" class="tweet_hashtag">#Winter</a>
                                <a href="javascript:;" class="tweet_hashtag">#sale</a>
                                <a href="javascript:;" class="tweet_hashtag">#oscarthemes</a>
                                <a href="javascript:;" class="tweet_hashtag" >#themeforest</a> compruebe "Construcel - Responsiv...
                                <a href="javascript:;">twitter.com/i/web/status/1…</a></span>
                        </li>
                        <li class="tweet_odd"><i class="fa fa-twitter"></i><span class="tweet_time">
                            <a href="javascript:;" title="view tweet on twitter">about 670 days ago</a></span>
                            <span class="tweet_text">Winter sale offering discounts up to 50%.
                                <a href="javascript:;" class="tweet_hashtag">#Winter</a>
                                <a href="javascript:;" class="tweet_hashtag">#sale</a>
                                <a href="javascript:;" class="tweet_hashtag">#oscarthemes</a>
                                <a href="javascript:;" class="tweet_hashtag" >#themeforest</a> compruebe "Construcel - Responsiv...
                                <a href="javascript:;">twitter.com/i/web/status/1…</a></span>
                            </li>
                    </ul>
                </div>
                <!--Twitter Widget End-->


            </div>
        </div>
    </div>
</footer>
<!--Hotel Footer End-->
<div class="osr-copyright th-bg">
    <p>2021<a target="_blank" href="http://themeforest.net/user/oscarthemes"> &copy; Full Tecnología</a></p>
</div>
</div>
<!-- Plugin jQuery Library -->

<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/js/parallax.js')}}"></script>
<script src="{{asset('frontend/js/imageloader.js')}}"></script>
<script src="{{asset('frontend/js/browser-detect.js')}}"></script>
<script src="{{asset('frontend/js/magnafic-popup.js')}}"></script>
<script src="{{asset('frontend/js/twitter.js')}}"></script>
<script src="{{asset('frontend/js/flickr.js')}}"></script>
<script src="{{asset('frontend/js/responsive-menu.js')}}"></script>
<script src="{{asset('frontend/js/slick.js')}}"></script>
<script src="{{asset('frontend/js/3deffect.js')}}"></script>
<script src="{{asset('frontend/js/isotope.js')}}"></script>
<script src="{{asset('frontend/js/datepicker.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>

</body>
</html>
