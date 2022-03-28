
 @section('style')
 <style>
    .paragraph_name{
    inline-size: 320px;
    max-inline-size: 305px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    }
    .paragraph_description{
    inline-size: 320px;
    max-inline-size: 305px;
    overflow:hidden;
    text-overflow:ellipsis;
    display:-webkit-box;
    -webkit-box-orient:vertical;
    -webkit-line-clamp:2;
    }

    .old_price{
    text-decoration:line-through;
    }

    .card-body.render-html-card ul {
      display: grid;
      /* grid-auto-columns: 1fr 1fr; */
      grid-template-columns: 1fr 1fr;
    }
    .name-img{
      color: white;
      text-align: center;
    }
    .gallary-thumb{
      background:#edcb9a;
    }
    .custom-li{
      list-style-type: none;
    }
    .text-img-description{
      margin: 8px;
    }

    .p_title{
      inline-size: 300px;
      block-size: 40px;
      max-inline-size: 100%;
      overflow:hidden;
      text-overflow:ellipsis;
      display:-webkit-box;
      -webkit-box-orient:vertical;
      -webkit-line-clamp:2;
      }

    .p_description{
      inline-size: 320px;
      block-size: 70px;
      max-inline-size: 305px;
      overflow:hidden;
      text-overflow:ellipsis;
      display:-webkit-box;
      -webkit-box-orient:vertical;
      -webkit-line-clamp:3;
    }
    .p-table{
     margin:  0 0 60px !important;
    }
 </style>
@endsection

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
                                <li><a href="{{ route('evento-pequeño') }}">Evento</a>
                                </li>
                            </ul>
                        </nav>
                        <h1 class="logo">
                            <a href="#"><img src="{{ asset('frontend/images/hotel-logo.png') }}" alt="Oscar Themes"/></a>
                        </h1>
                        <nav class="navigation pull-right">
                            <ul>
                                <li><a href="{{ route('pequeño-blog') }}">Blog</a>

                                </li>
                                <li>
                                    <a href="{{ route('galeria-simple') }}">Galería</a>
                                    {{-- <ul class="children">
                                        <li><a href="{{ route('galeria-simple') }}">Galería simple</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="last">
                                    <a href="#">Páginas</a>
                                    <ul class="children">
                                        <li><a href="{{ route('404') }}">404</a></li>
                                        <li><a href="{{ route('personal-pagina') }}">Personal</a></li>
                                        <li><a href="{{ route('acceso-pagina') }}">Inicio de sesión</a></li>
                                        <li><a href="{{ route('inscribase-pagina') }}">Inscríbase en</a></li>
                                        <li><a href="{{ route('comingsoon-paginas') }}">Comingsoon</a></li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <a href="{{ route('contacto') }}">Contacto con nosotros</a>
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

    @if ($home->show_section_slider)
        <div  class="chr_banner banner-hotel">
            <ul class="slider arrows">

              @forelse ($slider_homes as $slider_home)
              <li class="">
                    <div>
                        <img src="{{ asset('storage/slider-image/'.$slider_home->slider_image) }}" alt="Image here">
                        <div class="chr-caption-wrapper">
                            <div class="chr_banner_caption container">
                                <div class="chr-caption">
                                    <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-title">{{$slider_home->sub_title}}</h6>
                                    <h6 data-animation="fadeInUp" data-delay="0.5s" class="chr-caption-text">{{$slider_home->title}}</h6>
                                    <p data-animation="fadeInUp" data-delay="1s" class="chr-caption-contant">
                                      {{$slider_home->description}}
                                    </p>
                                    @if ($slider_home->link_1)
                                      <a href="{{$slider_home->link_1}}" data-animation="fadeInLeft" data-delay="1.3s" class="chr-btn fancy-btn">Explorar</a>
                                    @else

                                    @endif

                                    @if ($slider_home->link_2)
                                    <a href="{{$slider_home->link_2}}" data-animation="fadeInRight" data-delay="1.3s" class="chr-btn fancy-btn">Bok Ahora</a>
                                    @else

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
              @empty
              @endforelse

            </ul>
            <div class="widget widget-booking">
                <div class="booking-form">
                    <h3 class="title th-bd">Reserva de habitaciones</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                  RESERVA AHORA Y DISFRUTA DE UNA EXPERIENCIA DIFERENTE CON NOSOTROS
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                          <a style="text-align: center" class="chr-btn th-bg" href="{{ route('habitacion.index')}}"> RESERVAR AHORA</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
    <div class="widget widget-booking">
      <div style="background: #0C4459" class="booking-form">
          <h3 class="title th-bd"></h3>
          <form>
              <div class="row">
                  <div class="col-md-12">
                      <div class="input-field">
                      </div>
                  </div>
              </div>
          </form>
      </div>
    </div>
    @endif


<div class="main-contant">
    @if ($home->show_section_offers)
    <section>
        <div class="container">
            <div class="headind-1 text-center">
                <h3 class="title">Nuestras ofertas especiales</h3>
            </div>
            <div class="row">
                @foreach ( $rooms as $room )
                <li class="port-item col-md-4 col-sm-6">
                  <div class="fancy-effect">
                      <a href="{{ route('room.show',['room' => $room->id]) }}" class="chr-event-thumb fancy-thumb">
                          <figure>
                              <img src="{{ asset("storage/rooms/$room->image")}}" alt="Oscar Themes"/>
                          </figure>
                          <div class="text p-middel">
                              <p class="paragraph_name">{{$room->name}} </p>
                              <h6 class="th-cl old_price">Antes: S/.{{$room->price}}</h6>
                              <h3 class="th-cl">S/.{{$room->rental_price}}</h3>

                              <h4 class="th-cl">Desct. {{$room->discount}}%</h4>


                              <p class="paragraph_description">{{$room->description}}</p>
                          </div>
                      </a>
                  </div>
                </li>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if ($home->show_section_services)
    <section data-stellar-background-ratio="0.5"  class="parallax-section services-bg">
      <div class="container">
        <div class="headind-1 white text-center">
          <h3 class="title">Nuestros servicios</h3>
        </div>
        <div class="chr-main-services">
          <ul class="main-services-tab" role="tablist">
            @foreach ( $services as $service )
              <li role="presentation" class="{{$loop->first ? 'active' : ''}}">
                <a href="#service-{{$service->id}}" aria-controls="service-{{$service->id}}" role="tab" data-toggle="tab">
                  {{ $service->title }}
                </a>
              </li>
            @endforeach
          </ul>
          <div class="tab-content">
            @foreach ( $services as $service )
              <div role="tabpanel" class="tab-pane {{$loop->first ? 'active' : ''}}" id="service-{{$service->id}}">
                  <div class="chr-about-wrap">
                      <div class="row">
                          <div class="col-md-6 col-sm-6">
                              <figure class="fancy-btn">
                                  <img src="{{ asset('storage/service-image/'.$service->image) }}" alt="Oscar Themes"/>
                              </figure>
                          </div>
                          <div class="col-md-6">
                            <div class="card-body render-html-card">
                                <div class="text">
                                  {!! $service->description !!}
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    @endif

    @if ($home->show_section_gallery)
    <section class="gray-bg">
      <div class="container">
        <div class="headind-1 text-center">
            <h3 class="title">Nuestra galería</h3>
        </div>
        @foreach ($galleries as $gallery )
          <li class="port-item col-md-3 col-sm-3 mix spa hotel gym custom-li">
            <div class="gallary-thumb">
                <div class="fancy-thumb">
                  <img src="{{ asset('storage/gallery-image/'.$gallery->image) }}" alt="Oscar Themes">
                </div>
                <div class="name-img">
                  <div class="text text-img-description">
                    {{$gallery->description}}
                  </div>
                </div>
            </div>
          </li>
        @endforeach

       </div>
    </section>
    @endif

    @if ($home->show_section_blog)
    <section>
        <div class="container">
            <!--Heading 1 Start-->
            <div class="headind-1 text-center">
                <h3 class="title">Nuestro blog</h3>
            </div>
            <!--Heading 1 End-->
            <div class="row">

              @foreach ($blogs as $blog )
              <div class="col-md-4 col-sm-6">
                <div class="chr-blog-small">
                    <figure>
                        <img src="{{ asset('storage/blog-image/'.$blog->image) }}" alt="oscarthemes">
                        <div class="s-date-box">
                          <p>{{ \Carbon\Carbon::parse($blog->created_at)->toFormattedDateString('d-F-Y')}}</p>
                        </div>
                    </figure>
                    <div class="text">
                        <h4 class="title p_title"><a href="{{ route('blog.show',['blog' => $blog->id]) }}">{{$blog->title}}</a></h4>
                        <ul class="blog-meta">
                            <li><a href="#"><i class="fa fa-user"></i><span >{{$blog->name_author}}</span></a></li>
                            <li><a href="#"><i class="fa fa-comment-o"></i><span>{{$blog->comments_count}} Comentarios</span></a></li>
                          </ul>
                        <p class="p_description">{{$blog->description}}</p>
                        <a class="readmore-btn" href="{{ route('blog.show',['blog' => $blog->id]) }}">Leer más</a>
                    </div>
                </div>
              </div>
              @endforeach
            </div>
            <a class="chr-btn fancy-btn" href="{{'pequeño-blog'}}">Ver más</a>
        </div>
    </section>
    @endif

    @if ($home->show_section_prices)
    <section class="gray-bg price-table-section">
        <div class="container">
            <div class="headind-1 text-center">
                <h3 class="title">Nuestros precios</h3>
            </div>
            <div class="row">
                @foreach ($prices as $price)
                <div class="col-md-4 col-sm-6">
                    <div class="price-table p-table">
                        <h4 class="title">S/ {{ $price->price }} <sub>/ {{ $price->date }}</sub></h4>
                        <figure>
                            <img src="{{ asset('storage/prices-image/'.$price->image) }}" alt="OscarThemes">
                        </figure>
                        <div class="text render-html-price">
                            <p>{!! $price->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if ($home->show_section_brands)
    <div class="brnd-slider-wrap ">
      <div class="container">
          <div class="brnd-slider">
            @foreach ($brands as $brand)
            <div>
                <a href="#" class="thumb">
                    <img src="{{ asset('storage/brand-image/'.$brand->image) }}" alt="oscarthemes"/>
                </a>
            </div>
            @endforeach
          </div>
      </div>
    </div>
    @endif
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
<script src="{{asset('frontend/js/general-scripts.js') }}"></script>

</body>
</html>

@section('scripts')
  <script>
            console.log('testhomeeeeeeeeeeeeeeeeeeeeee')


  </script>
@endsection
