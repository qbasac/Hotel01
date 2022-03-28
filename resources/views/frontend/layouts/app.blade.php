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
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <title>About Us Hotel</title>
    <link href="{{ asset('frontend/css/css-plugin-collection.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/typography.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/shortcodes.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/favicon/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/favicon/apple-touch-icon-114x114.png')}}">
    <link rel="icon" sizes="192x192" href="{{asset('frontend/images/favicon/icon-192x192.png')}}">

    {{-- <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" /> --}}

    <link href="{{ asset('frontend/css/general-styles.css') }}" rel="stylesheet">
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
                                    <li class="{{ \Request::path() == 'home' ? 'active' : ''}}"><a href="{{ url('/') }}">Inicio</a></li>
                                    <li class="{{ \Request::path() == 'nosotros' ? 'active' : ''}}"><a href="{{ route('nosotros') }}"> Sobre nosotros</a></li>
                                    <li class="{{ \Request::path() == 'habitacion' ? 'active' : ''}}"><a href="{{ route('habitacion.index') }}"> Habitaciones</a></li>

                                    <li
                                    class="{{ \Request::path() == 'evento-peque%C3%B1o' || \Request::path() == 'evento-mediano' || \Request::path() == 'evento-grande' || \Request::path() == 'evento-lista'|| \Request::path() == 'evento-detalle'? 'active' : '' }}"
                                    ><a href="{{ route('evento-pequeño') }}">Evento</a>
                                    </li>
                                </ul>
                            </nav>
                            <h1 class="logo">
                                <a href="#"><img src="{{ asset('frontend/images/hotel-logo.png') }}" alt="Oscar Themes"/></a>
                            </h1>
                            <nav class="navigation pull-right">
                                <ul>
                                    <li
                                    class="{{ \Request::path() == 'lateral-blog' || \Request::path() == 'peque%C3%B1o-blog' || \Request::path() == 'mediano-blog' || \Request::path() == 'grande-blog'|| \Request::path() == 'lista-blog'|| \Request::path() == 'detalle-blog'? 'active' : '' }}"
                                    ><a href="{{ route('pequeño-blog') }}">Blog</a>

                                    </li>
                                    <li
                                    class=" {{ \Request::path() == 'galeria-maposteria' || \Request::path() == 'galeria-simple'? 'active' : '' }}"
                                     ><a href="{{ route('galeria-simple') }}">Galería</a>
                                    </li>
                                    {{-- <li
                                    class=" {{ \Request::path() == '404' || \Request::path() == 'personal-pagina' || \Request::path() == 'acceso-pagina' || \Request::path() == 'inscribase-pagina'|| \Request::path() == 'comingsoon-paginas'? 'active' : '' }}"
                                    ><a href="#">Páginas</a>
                                        <ul class="children">
                                            <li><a href="{{ route('404') }}">404</a></li>
                                            <li><a href="{{ route('personal-pagina') }}">Personal</a></li>
                                            <li><a href="{{ route('acceso-pagina') }}">Inicio de sesión</a></li>
                                            <li><a href="{{ route('inscribase-pagina') }}">Inscríbase en</a></li>
                                            <li><a href="{{ route('comingsoon-paginas') }}">Comingsoon</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="{{ \Request::path() == 'contacto' ? 'active' : ''}}">
                                        <a href="{{ route('contacto') }}">Contacto con nosotros</a>
                                    </li>
                                </ul>
                            </nav>
                            <!--DL Menu Start-->


                            <div id="mg-responsive-navigation" class="dl-menuwrapper">
                                <button class="dl-trigger">Abrir el menú</button>
                                <ul class="dl-menu">
                                    <li class="{{ \Request::path() == 'home' ? 'active' : ''}}" class="menu-item mg-parent-menu">
                                        <a  href="{{ route('home')}}">Inicio</a>
                                    </li>
                                    <li class="{{ \Request::path() == 'home' ? 'active' : ''}}"><a href="{{ route('nosotros') }}">Sobre nosotros</a></li>
                                    <li
                                    class=" {{ \Request::path() == 'habitacion' || \Request::path() == 'habitacion-lista' || \Request::path() == 'habitacion-detalle'? 'active' : '' }}"
                                    class="menu-item mg-parent-menu"><a href="#">Habitaciones</a>
                                        <ul class="dl-submenu">
                                            <li><a href="{{ route('habitacion.index')}}">Nuestras habitaciones</a></li>
                                            {{-- <li><a href="{{ route('habitacion-lista')}}">Lista de habitaciones</a></li> --}}
                                            {{-- <li><a href="{{ route('habitacion-detalle')}}">Detalle de la habitación</a></li> --}}
                                        </ul>
                                    </li>
                                    {{-- <li class=" {{ \Request::path() == 'lateral-blog' || \Request::path() == 'pequeño-blog' || \Request::path() == 'mediano-blog' || \Request::path() == 'grande-blog' || \Request::path() == 'lista-blog' || \Request::path() == 'detalle-blog'? 'active' : '' }}"
                                    ><a class="active" href="#">Blog</a>
                                        <ul class="dl-submenu">
                                            <li><a href="{{ route('lateral-blog')}}">Blog con Side</a></li>
                                            <li><a href="{{ route('pequeño-blog')}}">Blog Pequeño</a></li>
                                            <li><a href="{{ route('mediano-blog')}}">Blog Medio</a></li>
                                            <li><a href="{{ route('grande-blog') }}">Blog Grande</a></li>
                                            <li><a href="{{ route('lista-blog')}}">Lista de blogs</a></li>
                                            <li><a href="{{ route('detalle-blog') }}">Detalle del blog</a></li>
                                        </ul>
                                    </li>
                                    <li
                                    class=" {{ \Request::path() == 'evento-pequeño' || \Request::path() == 'evento-mediano' || \Request::path() == 'evento-grande' || \Request::path() == 'evento-lista' || \Request::path() == 'evento-detalle' ? 'active' : '' }}"
                                   ><a href="#">Evento </a>
                                        <ul class="children">
                                            <li><a href="{{ route('evento-pequeño')}}">Evento Pequeño</a></li>
                                            <li><a href="{{ route('evento-mediano')}}">Evento Medio</a></li>
                                            <li><a href="{{ route('evento-grande')}}">Evento grande</a></li>
                                            <li><a href="{{ route('evento-lista')}}">Lista de eventos</a></li>
                                            <li><a href="{{ route('evento-detalle')}}">Detalle del evento</a></li>
                                        </ul>
                                    </li>
                                    <li
                                    class=" {{ \Request::path() == 'galeria-maposteria' || \Request::path() == 'galeria-simple'? 'active' : '' }}"
                                     ><a href="#">Galería</a>
                                        <ul class="dl-submenu">
                                            <li><a href="{{ route('galeria-maposteria') }}">Galería de mampostería</a></li>
                                            <li><a href="{{ route('galeria-simple') }}">Galería simple</a></li>
                                        </ul>
                                    </li>
                                    <li
                                    class=" {{ \Request::path() == '404' || \Request::path() == 'personal-pagina' || \Request::path() == 'acceso-pagina' || \Request::path() == 'inscribase-pagina'|| \Request::path() == 'comingsoon-paginas'|| \Request::path() == 'detalle-blog'? 'active' : '' }}"
                                    class="menu-item mg-parent-menu"><a href="#">Páginas</a>
                                        <ul class="dl-submenu">
                                            <li><a href="{{ route('404') }}">404</a></li>
                                            <li><a href="{{ route('personal-pagina') }}">Personal</a></li>
                                            <li><a href="{{ route('acceso-pagina') }}">Inicio de sesión</a></li>
                                            <li><a href="{{ route('inscribase-pagina') }}">Inscríbase en</a></li>
                                            <li><a href="{{ route('comingsoon-paginas') }}">Comingsoon</a></li>
                                        </ul>
                                    </li>
                                    <li
                                    class="{{ \Request::path() == 'contacto' ? 'active' : ''}}"
                                    class="menu-item mg-parent-menu"><a href="{{ route ('contacto')}}">Contacto con nosotros</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            <section class="news-letter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4 class="title">Carta de noticias</h4>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!--Input Field Start-->
                            <div class="input-field">
                                <div id="mc_embed_signup" class="nl-form-container clearfix">
                                <form action="{{ route('admin.subscriptions.store') }}" method="POST" autocomplete="off" >
                                     @csrf   
                                        <input type="email"  name="email" class="email nl-email-input" placeholder="Dirección de correo electrónico" required>
                                        <label class="search_icon">
                                            <input type="submit" name="suscríbase a" value="">
                                        </label>
                                    </form>
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
                                <h4 class="widget-title"><span>Sobre nosotros</span></h4>
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
                                <h4 class="widget-title"><span>Feed de Flickr</span></h4>
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
                                            <a href="javascript:;" title="view tweet on twitter">about 670 days ago</a></span>
                                        <span class="tweet_text">Winter sale offering discounts up to 50%.
                                            <a href="javascript:;" class="tweet_hashtag">#Winter</a>
                                            <a href="javascript:;" class="tweet_hashtag">#sale</a>
                                            <a href="javascript:;" class="tweet_hashtag">#oscarthemes</a>
                                            <a href="javascript:;" class="tweet_hashtag" >#themeforest</a> Check out 'Construcel – Responsiv…
                                            <a href="javascript:;">twitter.com/i/web/status/1…</a></span>
                                        </span>
                                    </li>
                                    <li class="tweet_even"><i class="fa fa-twitter"></i><span class="tweet_time">
                                        <a href="javascript:;" title="view tweet on twitter">about 670 days ago</a></span>
                                        <span class="tweet_text">Winter sale offering discounts up to 50%.
                                            <a href="javascript:;" class="tweet_hashtag">#Winter</a>
                                            <a href="javascript:;" class="tweet_hashtag">#sale</a>
                                            <a href="javascript:;" class="tweet_hashtag">#oscarthemes</a>
                                            <a href="javascript:;" class="tweet_hashtag" >#themeforest</a> Check out 'Construcel – Responsiv…
                                            <a href="javascript:;">twitter.com/i/web/status/1…</a></span>
                                    </li>
                                    <li class="tweet_odd"><i class="fa fa-twitter"></i><span class="tweet_time">
                                        <a href="javascript:;" title="view tweet on twitter">about 670 days ago</a></span>
                                        <span class="tweet_text">Winter sale offering discounts up to 50%.
                                            <a href="javascript:;" class="tweet_hashtag">#Winter</a>
                                            <a href="javascript:;" class="tweet_hashtag">#sale</a>
                                            <a href="javascript:;" class="tweet_hashtag">#oscarthemes</a>
                                            <a href="javascript:;" class="tweet_hashtag" >#themeforest</a> Check out 'Construcel – Responsiv…
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
                <p>2021 <a target="_blank" href="http://themeforest.net/user/oscarthemes"></a>&copy; Full Tecnología</p>
            </div>
        </div>

        <script src="{{ asset('frontend/js/jquery.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
        <script src="{{ asset('frontend/js/parallax.js') }}"></script>
        <script src="{{ asset('frontend/js/imageloader.js') }}"></script>
        <script src="{{ asset('frontend/js/browser-detect.js') }}"></script>
        <script src="{{ asset('frontend/js/magnafic-popup.js') }}"></script>
        <script src="{{ asset('frontend/js/twitter.js') }}"></script>
        <script src="{{ asset('frontend/js/flickr.js') }}"></script>
        <script src="{{ asset('frontend/js/responsive-menu.js') }}"></script>
        <script src="{{ asset('frontend/js/slick.js') }}"></script>
        <script src="{{ asset('frontend/js/weather.js') }}"></script>
        <script src="{{ asset('frontend/js/3deffect.js')}}"></script>
        <script src="{{ asset('frontend/js/isotope.js')}}"></script>
        <script src="{{ asset('frontend/js/custom.js') }}"></script>

        <script src="{{asset('frontend/js/datepicker.js')}}"></script>
        <script src="{{ asset('frontend/js/sweetalert2.js') }}"></script>

        <script src="{{ asset('frontend/js/general-scripts.js') }}"> </script>


        @yield('scripts')
    </body>

<!-- Mirrored from bilalmghl.com/html/hotel/light-demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Oct 2021 22:56:30 GMT -->
</html>
