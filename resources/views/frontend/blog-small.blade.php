@extends('frontend.layouts.app')
@section('style')
  <style>
    .p_title{
      inline-size: 300px;
      block-size: 40px;
      max-inline-size: 100%;
      overflow:hidden;
      text-overflow:ellipsis;
      display:-webkit-box;
      -webkit-box-orient:vertical;
      -webkit-line-clamp:2;
      }

    .p_description{
      inline-size: 320px;
      block-size: 70px;
      max-inline-size: 100% !important;
      overflow:hidden;
      text-overflow:ellipsis;
      display:-webkit-box;
      -webkit-box-orient:vertical;
      -webkit-line-clamp:3;
    }

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
        <h5>Blog Pequeño</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Blog Pequeño</li>
        </ol>
    </div>
</div>



<div class="main-contant">
   <section>
    <div class="container">
        <div class="row">
          @foreach ($blogs as $blog )
            <div class="col-md-4 col-sm-6">
              <div class="chr-blog-small">
                  <figure>
                      <img src="{{ asset('storage/blog-image/'.$blog->image) }}" alt="oscarthemes">
                      <div class="s-date-box">
                        <p>{{ \Carbon\Carbon::parse($blog->created_at)->toFormattedDateString('d-F-Y')}}</p>
                      </div>
                  </figure>
                  <div class="text">
                      <h4 class="title p_title"><a href="{{ route('blog.show',['blog' => $blog->id]) }}">{{$blog->title}}</a></h4>
                      <ul class="blog-meta">
                          <li><i class="fa fa-user"></i><span>{{$blog->name_author}}</span></li>
                          <li><i class="fa fa-comment-o"></i><span>{{ $blog->comments_count}} Comentarios</span></li>
                      </ul>
                      <p class="p_description">{{$blog->description}}</p>
                      <a class="readmore-btn" href="{{ route('blog.show',['blog' => $blog->id]) }}">Leer más</a>
                  </div>
              </div>
            </div>
          @endforeach
          <div style="text-align: center;">
            {{ $blogs->links() }}
          </div>
        </div>
    </div>
</section>
</div>

@endsection
