@extends('frontend.layouts.app')

@section('content')
<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Galería</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Galería</li>
        </ol>
    </div>
</div>
<div class="main-contant">
    <!--Gallary Section Start-->
    <div class="section popup-gallery">
        <div class="container">
            <div class="row">
                <!--Gallary Thumb Strat-->
                @foreach ($galleries as $gallery)
                  <div class="col-md-4 col-sm-6">
                      <div class="gallary-thumb fancy-effect">
                          <div class="fancy-thumb">
                              <figure>
                                  <img src="{{ asset('storage/gallery-image/'.$gallery->image) }}" alt="Oscar Themes"/>
                              </figure>
                              <div class="zoom-icon p-middel">
                                  <a href="extra-images/sgallary-img1.jpg">
                                      <i class="fa fa-search"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach

                <!--Gallary Thumb End-->

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
    </div>
</div>
@endsection
