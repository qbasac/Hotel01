@extends('backend.layouts.app')

@section('sub-title')
    Servicios
@endsection

@section('styles')
  <style>
    .card-body.render-html-card ul {
      display: grid;
      /* grid-auto-columns: 1fr 1fr; */
      grid-template-columns: 1fr 1fr;
    }
  </style>
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary"><i class="fas fa-bed"></i> Nuestros servicios </h6>
            <div>
              <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Nuevo <i class="fas fa-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      @foreach ($services as $service)
        <div class="col-12">
          <div class="card">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="{{ asset('storage/service-image/'.$service->image) }}" class="rounded-start" style="inline-size: 100%" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body render-html-card">
                  {!! $service->description !!}
                  <div class="col">
                    <a href="{{ route('admin.services.edit', ['service' => $service->id] ) }}" class="btn btn-primary" title="Editar">
                      <i class="far fa-edit pe-1"></i> Editar
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</div>
@endsection


@section('scripts')
  <script>
    const $cards = document.querySelectorAll('.render-html-card')
    $cards.forEach( $card => {
      const $links = $card.querySelectorAll('p > a')
      $links.forEach( $link => {
        // $link.setAttribute('class','btn btn-sm btn-dark')
        $link.target = '_blank'
      })

      $listItem = $card.querySelectorAll('ul > li')
      $listItem.forEach( item => {
        item.setAttribute('style', `
          white-space: nowrap;
          text-overflow: ellipsis;
          overflow: hidden;
        `)
      })
    })
  </script>
@endsection
