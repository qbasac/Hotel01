@extends('frontend.layouts.app')

@section('style')
<style>
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
                <div style="text-align: center;">
                  {{ $galleries->links() }}
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
