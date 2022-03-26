@php
  use \Carbon\Carbon;
@endphp

@extends('frontend.layouts.app')

@section('style')
<style>
  .mt-3{
    margin-top: 30px;
  }

  .p_description {
    inline-size: 100%;
    block-size: 56px;
    max-inline-size: 100% !important;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    margin-bottom: 15px;
    margin-top: -20px;
  }

  .p_description_post {
    inline-size: 100%;
    block-size: 50px;
    max-inline-size: 100% !important;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    margin-bottom: 15px;
    margin-top: -20px;
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
                            </div>
                        </div>

                        <div class="room-related event-related">
                            <h5 class="heading-title">QUE VIENEN CON NOSOTROS?</h5>
                            <div class="row">
                                @foreach ($event->eventOrganizerDetail as $organizer)
                                <div class="col-md-4 col-sm-6">
                                    <div class="chr-staff-thumb">
                                        <figure>
                                            <img src="{{ asset('storage/event-organizer-image/'.$organizer->organizer->image) }}" alt="oscarthemes"/>
                                            <div class="p-middel">
                                                <p>{{ $organizer->organizer->description }}</p>
                                                <ul class="chr-social">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </figure>
                                        <div class="text">
                                            <h5 class="title"><a href="#">{{ $organizer->organizer->name }}</a></h5>
                                            <span class="designation">{{ $organizer->organizer->occupation }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="col-md-4">
                    <div class="chr-sidebar">
                        <div class="widget widget-event">
                            <h5 class="title">Próximos eventos</h5>
                            @foreach ($events as $event)
                              @if ($event->state_event == 2)
                              <div class="widget-event-thumb">
                                  <figure>
                                      <img src="{{ asset('storage/events-image/'.$event->image) }}" alt="oscarthemes">
                                  </figure>
                                  <div class="text-overflow">
                                    <h5 class="title"><a href="{{ route('detalle-evento',['id' => $event->id]) }}"> {{$event->name}}</a></h5>
                                    <div class="p_description">
                                      {!! $event->description !!}
                                    </div>
                                      <ul class="blog-meta">
                                          <li><a href="#"><i class="fa fa-calendar"></i><span>{{ \Carbon\Carbon::parse($event->date_event)->format('d-m-Y')}}</span></a></li>
                                          <li><a href="#"><i class="fa fa-map-marker"></i><span>{{ $event->place_celebration }}</span></a></li>
                                      </ul>
                                  </div>
                              </div>
                              @endif
                            @endforeach
                        </div>
                        <div class="widget widget-recent-post">
                            <h5 class="title">POSTOS RECIENTES</h5>
                            @foreach ($events as $event)
                            <div class="widget-event-thumb">
                                <figure>
                                    <img src="{{ asset('storage/events-image/'.$event->image) }}" alt="oscarthemes">
                                </figure>
                                <div class="text-overflow">
                                    <h5 class="title"><a href="{{ route('detalle-evento',['id' => $event->id]) }}"> {{$event->name}}</a></h5>
                                    <div class="p_description_post">
                                      <p>{!! $event->description !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>

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
