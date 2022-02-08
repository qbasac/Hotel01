@extends('frontend.layouts.app')

@section('content')
<div data-stellar-background-ratio="0.5"  class="parallax-section chr_banner chr-sub-banner text-center">
    <div class="container">
        <h5>Galería de mampostería</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Galería de mampostería</li>
        </ol>
    </div>
</div>
<!--Banner Wrap End-->
<!--Main Contant Start-->
<div class="main-contant">
    <!--Masonry Gallery Section Start-->
    <div class="section">
        <ul class="port-filter text-center">
            <li>
                <a href="#" class="filter active" data-filter="*">Todos los proyectos</a>
            </li>
            <li>
                <a href="#" class="filter" data-filter=".gym">gimnasio</a>
            </li>
            <li>
                <a href="#" class="filter" data-filter=".spa">spa</a>
            </li>
            <li>
                <a href="#" class="filter" data-filter=".hotel">hotel</a>
            </li>
        </ul>
        <!-- ITEMS GRID -->
        <ul class="port-grid popup-gallery padding5 masonry clearfix" id="items-grid2">
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix spa hotel gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img1.jpg')}}" alt="Oscar Themes"/>
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
            <li class="port-item col-md-6 mix hotel gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img3.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img3.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix hotel">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img2.jpg')}}" alt="Oscar Themes"/>
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
            <li class="port-item col-md-3 mix spa gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img4.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img4.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix hotel spa gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img5.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img5.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix spa hotel">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img6.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img6.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix hotel">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img8.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img8.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix spa hotel gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img7.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img7.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix hotel spa gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img11.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img11.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix spa hotel">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img12.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img12.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-6 mix hotel gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img9.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img9.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
            <!--Masonry Item End -->
            <!--Masonry Item Start-->
            <li class="port-item col-md-3 mix spa gym">
                <!--Gallary Thumb Strat-->
                <div class="gallary-thumb fancy-effect">
                    <div class="fancy-thumb">
                        <figure>
                            <img src="{{asset('frontend/extra-images/mgallary-img10.jpg')}}" alt="Oscar Themes"/>
                        </figure>
                        <div class="zoom-icon p-middel">
                            <a href="extra-images/mgallary-img10.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Gallary Thumb End-->
            </li>
        </ul>
    </div>
</div>


@endsection
