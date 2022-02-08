@extends('frontend.layouts.app')

@section('content')
    <div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
        <div class="container">
            <h5>About us</h5>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Sobre nosotros</li>
            </ol>
        </div>
    </div>

    <div class="main-contant">
        <section>
            <div class="container">
                <div class="aboutus-2">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="text">
                                <!--Heading 1 Start-->
                                <div class="headind-1">
                                    <h3 class="title">Sobre nosotros</h3>
                                </div>
                                <!--Heading 1 End-->
                                <p>Situado en la zona de Deira Creek de Toronto, este hotel se encuentra a poca distancia de las estaciones de autobús y metro de ist y a sólo 7 kilómetros del aeropuerto. El alojamiento se construyó en 1975 y es un clásico del Viejo Toronto, una zona repleta de centros comerciales y zocos tradicionales como el Mercado de las Especias. Cada una de las 275 habitaciones y suites cuenta con comodidades de lujo, como balcón privado y provisiones para café y té. Los huéspedes pueden elegir entre 9 restaurantes, entre ellos </p>
                                <p>Disfrute de un club de fitness bien equipado, un centro de negocios y servicio de aparcacoches, entre otros prácticos servicios. Este hotel de Dubái también incluye 12 salas de reuniones, la más grande de las cuales puede albergar eventos de hasta 1.400 asistentes.</p>
                                <a class="chr-btn fancy-btn" href="#">Leer Mas</a>
                                <div class="weather"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/about-img2.jpg') }}" alt="oscarthemes"/>
                                <img class="p-middel" src="{{ asset('frontend/extra-images/about-img3.jpg') }}" alt="oscarthemes"/>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div data-stellar-background-ratio="0.5" class="section parallax-section call-to-action-wrap text-center">
            <div class="text">
                <h4 class="title">VIDEO</h4>
                <p>Este hotel de Dubái también cuenta con 12 salas de reuniones, la más grande de las cuales puede albergar eventos de hasta 1400 personas.</p>
                <a class="chr-btn popup-youtube fancy-btn" href="https://www.youtube.com/watch?v=Z1Vjb2LBJJA">play</a>
            </div>
        </div>
        <section>
            <div class="container">
                <!--Heading 1 Start-->
                <div class="headind-1 text-center">
                    <h3 class="title">Nuestro personal</h3>
                </div>
                <!--Heading 1 End-->
                <div class="chr-staff-slider dot-style-1">
                    <!--Staff Thumb Start-->
                    <div class="col-md-3">
                        <div class="chr-staff-thumb">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/img-1.png') }}" alt="oscarthemes"/>
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
                                <span class="designation">Gerente</span>
                            </div>
                        </div>
                    </div>
                    <!--Staff Thumb End-->
                    <!--Staff Thumb Start-->
                    <div class="col-md-3">
                        <div class="chr-staff-thumb">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/img-2.png') }}" alt="oscarthemes"/>
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
                                <span class="designation">Gerente</span>
                            </div>
                        </div>
                    </div>
                    <!--Staff Thumb End-->
                    <!--Staff Thumb Start-->
                    <div class="col-md-3">
                        <div class="chr-staff-thumb">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/img-3.png') }}" alt="oscarthemes"/>
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
                                <span class="designation">Gerente</span>
                            </div>
                        </div>
                    </div>
                    <!--Staff Thumb End-->
                    <!--Staff Thumb Start-->
                    <div class="col-md-3">
                        <div class="chr-staff-thumb">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/img-4.png') }}" alt="oscarthemes"/>
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
                                <span class="designation">Gerente</span>
                            </div>
                        </div>
                    </div>
                    <!--Staff Thumb End-->
                    <!--Staff Thumb Start-->
                    <div class="col-md-3">
                        <div class="chr-staff-thumb">
                            <figure>
                                <img src="{{ asset('frontend/extra-images/img-4.png') }}" alt="oscarthemes"/>
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
                                <span class="designation">Gerente</span>
                            </div>
                        </div>
                    </div>
                    <!--Staff Thumb End-->
                </div>
            </div>
        </section>
        <section data-paroller-factor="0.25" data-paroller-type="background"  data-paroller-direction="vertical"  class="parallax hotel-testimonial-bg ">
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
                                    <img src="{{ asset('frontend/extra-images/testimonial1.jpg') }}" alt="Oscar Themes"/>
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
                                        <div style="width: 50%;" class="rating_up"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-th">
                                <div class="overflow-text">
                                    <h6 class="title"><a href="#">Gary</a></h6>
                                    <span class="sub-title">Invitado perfecto</span>
                                </div>
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/testimonial2.jpg') }}" alt="Oscar Themes"/>
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
                                    <h6 class="title"><a href="#"> Christian</a></h6>
                                    <span class="sub-title">Invitado perfecto</span>
                                </div>
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/testimonial3.jpg') }}" alt="Oscar Themes"/>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Thumb End-->
                </div>
            </div>
        </section>
    </div>

@endsection
