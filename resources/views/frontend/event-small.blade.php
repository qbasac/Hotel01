@php
  use \Carbon\Carbon;
  $now = now()->startOfDay();
@endphp
@extends('frontend.layouts.app')

@section('style')
<style>
  .p_description {
    inline-size: 100%;
    block-size: 85px;
    max-inline-size: 100% !important;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    margin-bottom: 15px
  }

  .current_event{
  position: absolute;
  top: 1.5rem;
  left: 3rem;
  display: inline-block;
  font-weight: 600;
  background: #0552c7;
  padding: 0 1rem;
  color: white;
  }

  .past_event{
  position: absolute;
  top: 1.5rem;
  left: 3rem;
  display: inline-block;
  font-weight: 600;
  background: #008f47;
  padding: 0 1rem;
  color: white;
  }

  .pagination li {
  margin-left: .25rem;
  margin-right: .25rem;
  }

  .pagination li .page-link {
  border-radius: 5rem;
  border: none;
  min-width: 2.25rem;
  text-align: center;
  color: #4f5464;
  }

  .pagination li.active .page-link,
  .pagination li .page-link:hover {
  background-color: #EDCB9A;
  color: #fff;
  font-weight: bold;
  }

</style>
@endsection
@section('content')
<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Evento pequeño</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Evento pequeño</li>
        </ol>
    </div>
</div>
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Event Small Section Start-->
    <section>
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                <div class="col-md-4">
                    <div class="chr-blog-small event-small">
                        <figure>
                            <img src="{{ asset('storage/events-image/'.$event->image) }}" alt="oscarthemes">
                        </figure>

                          @if (\Carbon\Carbon::parse($event->date_event)->equalTo($now))
                            <div class="current_event">
                              <span>Actual</span>
                            </div>
                          @else
                            <div class="past_event">
                              <span>Proximo</span>
                            </div>
                          @endif


                        <div class="text">
                            <h5 class="title"><a href="{{ route('detalle-evento' ,['id' => $event->id]) }}">{{ $event->name }}</a></h5>
                            <div class="p_description">
                              <p>{!! $event->description !!}</p>
                            </div>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>{{ \Carbon\Carbon::parse($event->date_event)->format('d-m-Y')}}</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>{{ $event->place_celebration }}</span></a></li>
                            </ul>
                            <a class="readmore-btn" href="{{ route('detalle-evento',['id' => $event->id]) }}">Leer más</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div style="text-align: center;">
                  {{ $events->links() }}
                </div>

            </div>
        </div>
    </section>
</div>

@endsection
