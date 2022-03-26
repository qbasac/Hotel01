@extends('frontend.layouts.app')

@section('name')
    <link rel="stylesheet" href="style.css">
@endsection

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
    font-size: 1.55em !important;
    font-weight: 400;
    line-height: normal;
    text-align: center;
    word-wrap: break-word;
    word-break: break-word;
    }

    .confirm-btn{
    border: 0;
    border-radius: .25em;
    background: initial;
    background-color: #7066e0;
    color: #fff;
    font-size: 1.5em !important;
    }

    .custom-title{
    position: relative;
    max-width: 100%;
    margin: 0;
    padding: .8em 1em 0;
    color: inherit;
    font-size: 2.1rem !important;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-wrap: break-word;
    }
    body > div.swal2-container.swal2-center.swal2-backdrop-show > div > div.text{
      display: none ;
    }
  </style>
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

    <div class="main-contant">
        <div class="chr-map">
          {!! $contact->direction_map !!}
        </div>

        <section class="chr-contact-wrap">
          <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="chr-contact-thumb">
                            <i class="fa fa-map-marker"></i>
                            <h5 class="title">Dirección</h5>
                            <p>{{ $contact->direction }}</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="chr-contact-thumb">
                            <i class="fa fa-phone"></i>
                            <h5 class="title">Teléfono</h5>
                            <p>{{ $contact->phone }}</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="chr-contact-thumb">
                            <i class="fa fa-envelope"></i>
                            <h5 class="title">Correo electrónico</h5>
                            <p>{{ $contact->email }}</p>
                        </div>
                    </div>
                </div>
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
                    <form action="{{ route('contact-form.store') }}" method="POST" autocomplete="off" novalidate>
                      @csrf                        <!--Divider Start-->
                        <div class="input-divider row">
                            <div class="col-md-4 col-sm-4">
                                <!--Input Field Start-->
                                <div class="input-field">
                                    <input id="name" name="name" type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="form-control " name="name" id="name" placeholder="Su nombre" required>
                                </div>
                                <!--Input Field End-->
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <!--Input Field Start-->
                                <div class="input-field">
                                    <input id="email" name="email" type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="form-control " name="email" id="email" placeholder="Correo electrónico" required>
                                </div>
                                <!--Input Field End-->
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <!--Input Field Start-->
                                <div class="input-field">
                                    <input id="subject" name="subject" type="text" value="" data-msg-required="Please enter subject" maxlength="100" class="form-control " name="subject" id="subject" placeholder="Asunto" required>
                                </div>
                                <!--Input Field End-->
                            </div>
                        </div>
                        <!--Divider End-->
                        <!--Input Field Start-->
                        <div class="input-field">
                            <textarea id="message" name="message" maxlength="5000" data-msg-required="Please enter your message" rows="4" class="form-control " name="message" id="message" placeholder="Su mensaje" required></textarea>
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
  @if ($errors->any())
    <script>
        Swal.fire({
          icon: 'error',
          title: 'Corrija los errores!',
          customClass:
          {
            popup: 'swal2-popup2',
            htmlContainer: 'swal2-html-container2',
            confirmButton: 'confirm-btn'
            // header: 'custom-title'
          },
          html: `
            <ul">
              @foreach ($errors->all() as $message)
                  <li style="text-align: start; font-size:  !important">{{$message}}</li>
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
          title: 'Su mensaje se ha enviado exitosamente!',
          customClass:
          {
            popup: 'swal2-popup2',
            htmlContainer: 'swal2-html-container2',
            confirmButton: 'confirm-btn'
            // header: 'custom-title'
          },
          html: `
            Su comentario se ha enviado exitosamente!
          `,
          confirmButtonText: 'Aceptar'
        })
    </script>
  @endif

@endsection

