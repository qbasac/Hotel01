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

    .img-services{
      inline-size: 100%;
      min-block-size: 100%;
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
              <form  method="POST" action="{{route('admin.services.ShowSectionServices', ['services' => $home->id] )}}" class="d-inline">
                @csrf
                <input type="hidden" name="state" value="{{$home->show_section_services}}">
                @if ($home->show_section_services)
                <button style="margin-right: 5px;"  type="submit" class="btn btn btn-danger float-end" title="">
                  Ocultar servicios <i class="fas fa-eye-slash"></i>
                </button>
                @else
                <button style="margin-right: 5px;" type="submit" class="btn btn btn-success " title="Cambiar estado">
                  Mostrar servicios <i class="fas fa-eye"></i>
                </button>
                @endif
              </form>
            </div>
          </div>
          <hr>
          <div class="row">
            @foreach ($services as $service)
              <div class="col-12">
                <div class="card bg-light">
                  <div class="row g-0">
                    <div class="col-md-5">
                      <img class="img-services rounded-start" src="{{ asset('storage/service-image/'.$service->image) }}" alt="...">
                    </div>
                    <div class="col-md-7">
                      <div class="card-body render-html-card">
                        {!! $service->description !!}
                        <div class="col text-center">
                          <a href="{{ route('admin.services.edit', ['service' => $service->id] ) }}" class="btn btn-sm btn-primary" title="Editar">
                            <i class="far fa-edit pe-1"></i> Editar
                          </a>
                          <form action="{{ route('admin.services.destroy',$service->id) }}"  method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Eliminar</button>
                          </form>
                          <form method="POST" action="{{route('admin.services.updateIsActive', ['services' => $service->id] )}}" class="d-inline">
                            @csrf
                            <input type="hidden" name="state" value="{{$service->is_active}}">
                            @if ($service->is_active)
                              <button type="submit"
                                class="btn btn-sm btn-success"
                                title="Cambiar estado">
                                <i class="far fa-check-circle"></i> Activo
                              </button>
                            @else
                              <button type="submit"
                                class="btn btn-sm btn-danger"
                                title="Cambiar estado">
                                <i class="far fa-times-circle"></i> Inactivo
                              </button>
                            @endif
                          </form>
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
        $link.setAttribute('class','btn btn-sm btn-dark')
        $link.target = '_blank'
      })

      $listItem = $card.querySelectorAll('ul > li')
      $listItem.forEach( item => {
        item.setAttribute('style', `
          white-space: nowrap;
          text-overflow: ellipsis;
          overflow: hidden;
          list-style-position: inside ;
        `)
      })
    })
  </script>
@endsection
