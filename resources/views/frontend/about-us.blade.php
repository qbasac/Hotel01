@extends('frontend.layouts.app')

@section('style')
  <style>
    .bg-section-video {
      background: url('{{ asset("frontend/extra-images/about-img2.jpg") }}');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: top center;
    }

    .checked-star  {
      cursor: pointer;
    }
    .checked-star:hover > i {
      cursor: pointer;
      color: #ED980E;
    }
    .list-checbox-star:checked + i {
      color: #ED980E;
    }
    .list-checbox-star:not(:checked) + i {
      color: rgb(139, 139, 139);
    }
    .list-checbox-star:not(:checked):hover + i {
      cursor: pointer;
      color: #ED980E;
    }

    .d-none{
      display: none;
    }

    .d-star{
      display: inline-flex;
    }

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
                                <div class="headind-1">
                                    <h3 class="title">{{$about->about_title}}</h3>
                                </div>
                                <p>{{$about->about_description}}</p>
                                <a class="chr-btn fancy-btn" target="_blank"  href="{{$about->about_link}}">Leer Mas</a>
                                <div class="weather"></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <figure>
                                <img src="{{ asset('storage/about/'.$about->about_image)}}" alt="oscarthemes"/>
                                <img class="p-middel" src="{{ asset('storage/about/'.$about->about_sub_image)}}" alt="oscarthemes"/>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div data-stellar-background-ratio="0.5" style="" class="bg-section-video section parallax-section call-to-action-wrap text-center ">
            <div class="text">
                <h4 class="title">{{$about->seccion_video_title}}</h4>
                <p>{{$about->seccion_video_description}}</p>
                <a class="chr-btn popup-youtube fancy-btn" href="{{$about->seccion_video_link}}">play</a>
            </div>
        </div>

        @if ($about->seccion_staff_is_active)
          <section>
            <div class="container">
              <div class="headind-1 text-center">
                  <h3 class="title">Nuestro personal</h3>
              </div>
              <div class="chr-staff-slider dot-style-1">
                  @forelse ($users as $user)
                  <div class="col-md-3">
                      <div class="chr-staff-thumb">
                          <figure>
                            @if ($user->avatar)
                            <img src="{{ asset('storage/users/'.$user->avatar) }}" alt="oscarthemes"/>
                            @else
                            <img src="{{ asset('assets/users/avatar-default.png')}}" alt="oscarthemes"/>
                            @endif
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
                              <h5 class="title"><a href="#">{{$user->nick_name}}</a></h5>
                              <span class="designation">Gerente</span>
                          </div>
                      </div>
                  </div>
                  @empty
                  @endforelse
              </div>
            </div>
          </section>
        @endif
        <div class="container">
          <div class="comment-form">
            <h5 class="heading-title">Deje su testimonio</h5>
            <form action="{{ route('testimonial.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="input-divider row">
                <div class="col-md-4">
                    <div class="input-field">
                        <input type="text" id="name" name="name" placeholder="Su nombre">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Su correo electrónico">
                    </div>
                </div>
                  <div class="col-md-4">
                    <div class="form-group mb-3">
                      <div>
                        <div class="form-group row col-sm-12">
                          <div class="d-star">
                            <div class="col-sm-4">
                              <span>Calificación</span>
                            </div>
                            <div class="col-sm-1">
                              <label for="star-1" class="checked-star mb-0">
                                <input type="checkbox" name="rating" value="1" class="list-checbox-star d-none" id="star-1">
                                <i class="fas fa-star"></i>
                              </label>
                            </div>
                            <div class="col-sm-1">
                              <label for="star-2" class="checked-star mb-0">
                                <input type="checkbox" name="rating" value="2" class="list-checbox-star d-none" id="star-2">
                                <i class="fas fa-star"></i>
                              </label>
                            </div>
                            <div class="col-sm-1">
                              <label for="star-3" class="checked-star mb-0">
                                <input type="checkbox" name="rating" value="3" class="list-checbox-star d-none" id="star-3">
                                <i class="fas fa-star"></i>
                              </label>
                            </div>
                            <div class="col-sm-1">
                              <label for="star-4" class="checked-star mb-0">
                                <input type="checkbox" name="rating" value="4" class="list-checbox-star d-none" id="star-4">
                                <i class="fas fa-star"></i>
                              </label>
                            </div>
                            <div class="col-sm-1">
                              <label for="star-5" class="checked-star mb-0">
                                <input type="checkbox" name="rating" value="5" class="list-checbox-star d-none" id="star-5">
                                <i class="fas fa-star"></i>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="input-field">
                    <textarea id="section_testimonial_comment" name="comment" placeholder="Su mensaje"></textarea>
                </div>
                <div class="input-field">
                  <input type="submit" value="Enviar ahora">
                </div>
              </div>
            </form>
          </div>
        </div>

        @if ($about->show_section_testimonial)
          <section data-paroller-factor="0.25" data-paroller-type="background"  data-paroller-direction="vertical"  class="parallax hotel-testimonial-bg ">
              <div class="container">
                  <div class="headind-1 white text-center">
                    <h3 class="title">Testimonios</h3>
                  </div>
                  <div class="hotel-testimonial arrows">
                    @forelse ($testimonials as $testimonial)
                      <div class="col-md-6 col-sm-6" style="cursor: pointer">
                          <div class="hotel-testimonial-thumb">
                              <div class="text">
                                  <p> {{ $testimonial->section_testimonial_comment }} </p>
                                  <div class="rating-thumb">
                                      <label>Calificación</label>
                                      <div class="rating_down">
                                        <div style="width: {{$convertNumberIntoPercentage($testimonial->section_testimonial_rating)}}%;" class="rating_up"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="user-th">
                                  <div class="overflow-text">
                                    <span class="sub-title">Nuestro cliente</span>
                                      <h6 class="title"><a href="#">{{$testimonial->section_testimonial_name}}</a></h6>
                                  </div>
                                  <figure>
                                    @if ($testimonial->section_testimonial_gender)
                                      <img src="{{ asset('backend/assets/images/users/F.png') }}" alt="Oscar Themes"/>
                                    @else
                                      <img src="{{ asset('backend/assets/images/users/M.png') }}" alt="Oscar Themes"/>
                                    @endif
                                  </figure>
                              </div>
                          </div>
                      </div>
                    @empty
                      <div class="col-md-12 col-sm-12 text-center">
                        <i class="far fa-comments" style="font-size: 7em; padding-bottom: 15px"></i>
                        <h5 class="text-muted" style="font-weight: bold">Sin testimonios</h5>
                      </div>
                      <div class="col-md-12 col-sm-12 text-center">
                        <i class="far fa-comments" style="font-size: 7em; padding-bottom: 15px"></i>
                        <h5 class="text-muted" style="font-weight: bold">Sin testimonios</h5>
                      </div>
                    @endforelse
                  </div>
              </div>
          </section>
        @endif
@endsection

@section('scripts')
  <script>
    let biggerNumber = 0 // Número mayor
    const $stars = document.querySelectorAll('.list-checbox-star')

    $stars.forEach( $star => {
      $star.addEventListener('change', ({ target }) => {
        target.checked ? setCheckedStars(target.value) : setUncheckedStars(target.value)
      })
    })

    function setCheckedStars(pointerLargestNumber) {
      const filtersStars = Array.from($stars).filter($star => $star.value <= pointerLargestNumber)
      filtersStars.forEach($star => {
        $star.checked = true
        console.log($star)
      })
    }

    function setUncheckedStars(pointerLargestNumber) {
      const filtersStars = Array.from($stars).filter($star => $star.value > pointerLargestNumber)
      console.log(filtersStars)
      filtersStars.forEach($star => {
        $star.checked = false
        console.log($star)
      })
      $stars.forEach($star => {
        if($star.value == pointerLargestNumber) {
          $star.checked = true
        }
      })
    }
  </script>

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

@if (session('created'))
<script>
Swal.fire({
      icon: 'success',
      title: 'Su comentario se ha enviado exitosamente!',
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
