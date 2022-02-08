@extends('frontend.layouts.app')

@section('content')

<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Evento grande</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Evento grande</li>
        </ol>
    </div>
</div>
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Event Section Start-->
    <section>
        <div class="container">
            <div class="row">
                <!--Event Large Start-->
                <div class="col-md-12">
                    <div class="chr-blog-small event-small event-large">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-el1.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="{{asset('frontend/event-detail.html')}}">Evento para parejas</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the asi printing and is the best inisistin type settinin industry. Lorem Ipsum...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Blog Large End-->
                <!--Event Large Start-->
                <div class="col-md-12">
                    <div class="chr-blog-small event-small event-large">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-el2.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the asi printing and is the best inisistin type settinin industry. Lorem Ipsum...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Blog Large End-->
                <!--Event Large Start-->
                <div class="col-md-12">
                    <div class="chr-blog-small event-small event-large">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-el3.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the asi printing and is the best inisistin type settinin industry. Lorem Ipsum...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Blog Large End-->
                <!--Event Large Start-->
                <div class="col-md-12">
                    <div class="chr-blog-small event-small event-large">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-el4.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the asi printing and is the best inisistin type settinin industry. Lorem Ipsum...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Blog Large End-->
                <!--Event Large Start-->
                <div class="col-md-12">
                    <div class="chr-blog-small event-small event-large">
                        <figure>
                            <img src="{{asset('frontend/extra-images/img-el5.jpg')}}" alt="oscarthemes">
                        </figure>
                        <div class="text">
                            <h5 class="title"><a href="event-detail.html">Evento para parejas</a></h5>
                            <p>Lorem Ipsum is simply dummy text of the asi printing and is the best inisistin type settinin industry. Lorem Ipsum...</p>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i><span>05.03.2017</span></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><span>Rocket Stadium , Los Angeles</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Blog Large End-->
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
    <!--Blog Section End-->
</div>


</div>

@endsection
