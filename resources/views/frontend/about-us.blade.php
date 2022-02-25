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
                                <img class="p-middel" src="{{ asset('frontend/extra-images/about-img3.jpg') }}" alt="oscarthemes"/>
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

        @if ($about->show_section_staff)
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
      @else
    @endif

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
    </div>
    @else
    @endif

@endsection
