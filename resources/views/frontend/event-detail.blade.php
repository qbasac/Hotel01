@php
  use \Carbon\Carbon;
@endphp

@extends('frontend.layouts.app')

@section('style')
<style>
  .mt-3{
    margin-top: 30px;
  }
</style>
@endsection

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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="chr-room-detail chr-event-detail">
                        <figure>
                            <img src="{{ asset('storage/events-image/'.$event->image) }}" alt="oscarthemes">
                        </figure>

                        <div class="room-detail-caption event-detail-caption mt-3">
                            <h5 class="heading-title">{{$event->name}}</h5>
                            <div class="cardDescription">
                             <p>{!!$event->description!!}</p>
                            </div>
                        </div>

                        <div class="event-detail-info">
                            <h5 class="heading-title">Detalles del evento</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-event-info">
                                        <div class="text">
                                            <h6 class="title"><i class="fa fa-clock-o"></i>Hora de inicio</h6>
                                            <p>{{ \Carbon\Carbon::parse($event->star_time)->format('g:i A')}}</p>
                                            {{-- $date->isoFormat('LLLL'); --}}
                                            <p>{{ Carbon::parse($event->date_event)->isoFormat('LLLL') }}</p>
                                        </div>
                                        <div class="text">
                                            <h6 class="title"><i class="fa fa-clock-o"></i>Tiempo de finalización</h6>
                                            <p>{{ \Carbon\Carbon::parse($event->time_completion)->format('g:i A')}}</p>
                                            <p>{{ Carbon::parse($event->date_event)->isoFormat('dddd, DD MMMM YYYY') }}</p>
                                        </div>
                                        <div class="text">
                                            <h6 class="title"><i class="fa fa-map-marker"></i>Lugar de celebración</h6>
                                            <p>{{ $event->place_celebration}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <!--Event Detail Caption Start-->
                                    <div class="room-detail-caption event-detail-caption">
                                        <p>Ut dignissim, nunc vel fringilla cursus, nunc nisl mattis est, vel pharetra mauris nisi non lorem. Duis ipsum neque, congue quis semper at, malesuada quis ex. Aliquam lacinia eget lorem ac lobortis. Donec justo turpis, congue vel nulla eu, viverra porta magna. Quisque ac sapien ac lorem pellentesque commodo.</p>
                                        <p>Ut dignissim, nunc vel fringilla cursus, nunc nisl mattis est, vel pharetra mauris nisi non lorem. Duis ipsum neque, congue quis semper at, malesuada quis ex. Aliquam lacinia eget lorem ac lobortis. Donec justo turpis, congue vel nulla eu, viverra porta magna. Quisque ac sapien ac lorem pellentesque commodo.</p>
                                    </div>
                                    <!--Event Detail Caption End-->
                                </div> --}}
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

@section('scripts')
<script>

const $cardDescription = document.querySelectorAll('.cardDescription')
    $cardDescription.forEach( $cardDescription => {

    const $links = $cardDescription.querySelectorAll('p > a')
    $links.forEach( $link => {
      $link.target = '_blank'
      $link.setAttribute('style', `
      color: #1B82EC;
        `)
      })
    })

</script>

@endsection
