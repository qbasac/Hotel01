@extends('frontend.layouts.app')

@section('style')
<style>
  .p_description {
    inline-size: 100%;
    block-size: 70px;
    max-inline-size: 100% !important;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
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
                        <div class="text">
                            <h5 class="title"><a href="{{ route('detalle-evento' ,['id' => $event->id]) }}">{{ $event->name }}</a></h5>
                            <p class="p_description">{{ $event->description }}</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>{{ $event->date_event }}</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>{{ $event->place_celebration }}</span></a></li>
                            </ul>
                            <a class="readmore-btn" href="{{ route('detalle-evento',['id' => $event->id]) }}">Leer más</a>
                        </div>
                    </div>
                </div>
                @endforeach


                <!--Even Small End-->
                <div class="col-md-12">
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
            </div>
        </div>
    </section>
</div>

@endsection
