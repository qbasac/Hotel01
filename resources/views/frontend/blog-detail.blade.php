@php
  use \Carbon\Carbon;

@endphp
@extends('frontend.layouts.app')

@section('style')
  <style>

    .swal2-popup2 {
    display: none;
    position: relative;
    box-sizing: border-box;
    grid-template-columns: minmax(0,100%);
    width: 46em !important;
    max-width: 100%;
    block-size: 300px;
    padding: 16px 0 1.25em;
    border: none;
    border-radius: 5px;
    background: #fff;
    color: #545454;
    font-family: inherit;
    font-size: 1rem;
    }

    .swal2-html-container2{
    z-index: 1;
    justify-content: center;
    margin: 1em 1.6em .3em;
    padding: 0;
    overflow: hidden !important;
    color: inherit;
    font-size: 1.125em;
    font-weight: 400;
    line-height: normal;
    text-align: center;
    word-wrap: break-word;
    word-break: break-word;
    }

    body > div.swal2-container.swal2-center.swal2-backdrop-show > div > div.text{
      display: none ;
    }
  </style>
@endsection

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
                    <div class="chr-blog-small chr-blog-detail">
                        <figure>
                            <img src="{{ asset('storage/blog-image/'.$blog->image) }}" alt="oscarthemes">
                            <div class="s-date-box">
                                <span>24</span>
                                <p>Enero 2017</p>
                            </div>
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="blog-detail.html">{{$blog->title}}</a></h5>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-user"></i><span>{{$blog->name_author}}</span></a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i><span>{{ $blog->comments_count}} Comentarios</span></a></li>
                            </ul>
                            <p>{{$blog->description}}</p>

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
                    <div class="chr-comment-wrap">
                        <h5 class="heading-title">Comentarios {{ $blog->comments_count}}</h5>
                        <ul class="comment">

                          @foreach ( $blog->comments as $comment)
                          @if ($comment->is_active)
                            <li>
                                <div class="comment-thumb flex-text">
                                    <figure>
                                        <img src="{{asset('frontend/extra-images/ct-1.jpg')}}" alt="oscarthemes"/>
                                    </figure>
                                    <div class="text">
                                        <h5 class="title"><a href="#">{{$comment->name}}</a><span>{{ Carbon::parse($comment->created_at)->isoFormat('dddd, DD MMMM YYYY') }}</span></h5>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </div>
                            </li>
                          @endif
                          @endforeach
                        </ul>
                    </div>

                    <div class="comment-form">
                        <h5 class="heading-title">Deja tu comentario</h5>
                        <form action="{{ route('blog.store') }}" method="POST" autocomplete="off">
                          @csrf
                          <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <div class="input-divider row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-field">
                                        <input id="name" name="name"  type="text" placeholder="Su nombre">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-field">
                                        <input id="email" name="email" type="text" placeholder="Su correo electrónico">
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <textarea id="comment" name="comment" placeholder="Su mensaje"></textarea>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="Enviar ahora">
                            </div>
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

@section('scripts')
  @if ($errors->any())
    <script>
        Swal.fire({
          icon: 'error',
          title: 'Corrija los errores!',
          customClass:
          {
            popup: 'swal2-popup2',
            htmlContainer: 'swal2-html-container2',
          },
          html: `
            <ul">
              @foreach ($errors->all() as $message)
                 <h5> <li style="text-align: start">{{$message}}</li></h5>
              @endforeach
            </ul>
          `,
          confirmButtonText: 'Continuar'
        })
    </script>
  @endif

  @if (session('created') == 'vale')
    <script>
    Swal.fire({
          icon: 'success',
          title: 'Su comentario se ha enviado exitosamente!',

          html: `
          Su comentario se ha enviado exitosamente!
          `,
          confirmButtonText: 'Aceptar'
        })
    </script>
  @endif

@endsection
