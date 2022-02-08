@extends('frontend.layouts.app')

@section('name')
    <link rel="stylesheet" href="style.css">
@endsection

@section('content')
    <div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
        <div class="container">
            <h5>Contacto</h5>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Contacto</li>
            </ol>
        </div>
    </div>
    <!--Banner Wrap End-->
    <div class="main-contant">
        <div class="chr-map">
            <div id="map-canvas"></div>
        </div>
        <!--Contact Us Section Start-->
        <section class="chr-contact-wrap">
            <div class="container">
                <!--Contact Wrap Start-->
                <div class="row">
                    <!--Contact Thumb Start-->
                    <div class="col-md-4 col-sm-4">
                        <div class="chr-contact-thumb">
                            <i class="fa fa-map-marker"></i>
                            <h5 class="title">Dirección</h5>
                            <p>Gulberg 3 , Walton Road , Usa</p>
                        </div>
                    </div>
                    <!--Contact Wrap End-->
                    <!--Contact Thumb Start-->
                    <div class="col-md-4 col-sm-4">
                        <div class="chr-contact-thumb">
                            <i class="fa fa-phone"></i>
                            <h5 class="title">Teléfono</h5>
                            <p>+1 - 99 - 1234567</p>
                        </div>
                    </div>
                    <!--Contact Wrap End-->
                    <!--Contact Thumb Start-->
                    <div class="col-md-4 col-sm-4">
                        <div class="chr-contact-thumb">
                            <i class="fa fa-envelope"></i>
                            <h5 class="title">Correo electrónico a</h5>
                            <p>info@themes.com</p>
                        </div>
                    </div>
                    <!--Contact Wrap End-->
                </div>
                <!--Contact Wrap End-->
            </div>
        </section>
        <!--Contact Us Section End-->
        <section class="gray-bg">
            <div class="container">
                <div class="contact-form">
                    <!--Heading 1 Start-->
                    <div class="headind-1 text-center">
                        <h3 class="title">Póngase en contacto con nosotros</h3>
                    </div>
                    <!--Heading 1 End-->
                    <form id="contact-form" action="https://bilalmghl.com/html/hotel/light-demo/php/contact-form.php" method="POST">
                        <!--Divider Start-->
                        <div class="input-divider row">
                            <div class="col-md-4 col-sm-4">
                                <!--Input Field Start-->
                                <div class="input-field">
                                    <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="form-control " name="name" id="name" placeholder="Su nombre" required>
                                </div>
                                <!--Input Field End-->
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <!--Input Field Start-->
                                <div class="input-field">
                                    <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="form-control " name="email" id="email" placeholder="Correo electrónico" required>
                                </div>
                                <!--Input Field End-->
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <!--Input Field Start-->
                                <div class="input-field">
                                    <input type="text" value="" data-msg-required="Please enter subject" maxlength="100" class="form-control " name="subject" id="subject" placeholder="Asunto" required>
                                </div>
                                <!--Input Field End-->
                            </div>
                        </div>
                        <!--Divider End-->
                        <!--Input Field Start-->
                        <div class="input-field">
                            <textarea maxlength="5000" data-msg-required="Please enter your message" rows="4" class="form-control " name="message" id="message" placeholder="Su mensaje" required></textarea>
                        </div>
                        <!--Input Field End-->
                        <!--Input Field Start-->
                        <div class="input-field text-center">
                            <input type="submit" value="ENVIAR MENSAJE" class="button medium rounded gray font-open-sans mt-40" data-loading-text="Loading...">
                        </div>
                        <!--Input Field End-->
                        <div class="alert alert-success hidden animated pulse" id="contactSuccess">
                            Gracias, su mensaje ha sido enviado.
                        </div>
                        <div class="alert alert-danger hidden animated shake" id="contactError">
                            <strong>Error!</strong> Hubo un error al enviar su mensaje.
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
{{-- </div> --}}

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

@endsection

@section('scripts')

@endsection
