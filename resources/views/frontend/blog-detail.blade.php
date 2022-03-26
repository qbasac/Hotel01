@php
  use \Carbon\Carbon;
@endphp
@extends('frontend.layouts.app')

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
        <h5>Detalle del blog</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Detalle del blog</li>
        </ol>
    </div>
</div>
<div class="main-contant">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="chr-blog-small chr-blog-detail">
                        <div class="text">
                            <h5 class="title"><a href="blog-detail.html">{{$blog->title}}</a></h5>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="fa fa-user"></i><span>{{$blog->name_author}}</span></a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i><span>{{ $blog->comments_count}} Comentarios</span></a></li>
                            </ul>
                            <div class="row">
                              <div class="col-md-7">
                                <p class="text-justify">{{$blog->description}}</p>
                              </div>
                              <div class="col-md-5">
                                <figure>
                                  <img src="{{ asset('storage/blog-image/'.$blog->image) }}" alt="oscarthemes">
                                  <div class="s-date-box">
                                    <p>{{ \Carbon\Carbon::parse($blog->created_at)->toFormattedDateString('d-F-Y')}}</p>
                                  </div>
                              </figure>
                               </div>
                            </div>

                        </div>
                    </div>
                    <div class="chr-comment-wrap">
                        <h5 class="heading-title">Comentarios {{ $blog->comments_count}}</h5>
                        <ul class="comment">
                          @foreach ( $blog->comments as $comment)
                            @if ($comment->is_active)
                              <li>
                                  <div class="comment-thumb flex-text">
                                      <figure>
                                          <img src="{{asset('frontend/extra-images/ct-1.jpg')}}" alt="oscarthemes"/>
                                      </figure>
                                      <div class="text">
                                          <h5 class="title"><a href="#">{{$comment->name}}</a><span>{{ Carbon::parse($comment->created_at)->isoFormat('dddd, DD MMMM YYYY') }}</span></h5>
                                          <p>{{$comment->comment}}</p>
                                      </div>
                                  </div>
                              </li>
                            @endif
                          @endforeach
                        </ul>
                    </div>

                    <div class="comment-form">
                        <h5 class="heading-title">Deja tu comentario</h5>
                        <form action="{{ route('blog.store') }}" method="POST" autocomplete="off">
                          @csrf
                          <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <div class="input-divider row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-field">
                                        <input id="name" name="name"  type="text" placeholder="Su nombre">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-field">
                                        <input id="email" name="email" type="text" placeholder="Su correo electrónico">
                                    </div>
                                </div>
                            </div>
                            <div class="input-field">
                                <textarea id="comment" name="comment" placeholder="Su mensaje"></textarea>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="Enviar ahora">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
