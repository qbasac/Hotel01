@extends('backend.layouts.app')

@section('sub-title')
  Precios
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="far fa-money-bill-alt"></i>
              Nuestros precios
            </h6>
            <div>
              @if ($prices->count() < 3)
                <a href="{{ route('admin.prices.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a>
              @endif
             <form  method="POST" action="{{route('admin.prices.ShowSectionPrices', ['prices' => $home->id] )}}" class="d-inline">
              @csrf
              <input type="hidden" name="state" value="{{$home->show_section_prices}}">
              @if ($home->show_section_prices)
              <button type="submit" class="btn btn btn-danger float-end me-2" title="">
                Ocultar <i class="fas fa-eye-slash"></i>
              </button>
              @else
              <button type="submit" class="btn btn btn-success me-2" title="Cambiar estado">
                Mostrar <i class="fas fa-eye"></i>
              </button>
              @endif
            </form>
            </div>
          </div>
          <hr>
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
          </svg>
          @if (session('created'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if (session('updated'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('updated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <div class="row">
            @foreach ($prices as $price)
              <div class="col-md-6 col-xl-4">
                <div class="card bg-light border border-secondary">
                  <div class="card-body bg-dark">
                    <div class="row pt-1">
                      <div class="col-12 ">
                        <div class="card-title text-white justify-content-center"><h3 class="text-white">S/ {{ $price->price }} </h3> <h5 class="text-white">  / {{ $price->date }}</h5> </div>
                      </div>
                    </div>
                    </div>
                    <img class="img-fluid" src="{{ asset('storage/prices-image/'.$price->image) }}" alt="Card image cap">
                    <div class="card-body render-html-card">
                        <p>{!! $price->description !!}</p>
                        <div class="col text-center">
                          <a href="{{ route('admin.prices.edit', ['price' => $price->id] ) }}" class="btn btn-sm btn-primary" title="Editar">
                            <i class="far fa-edit pe-1"></i> Editar
                          </a>
                          <form action="{{ route('admin.prices.destroy',$price->id) }}"  method="POST" class="d-inline form-delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Eliminar</button>
                          </form>
                          <form method="POST" action="{{route('admin.prices.updateIsActive', ['prices' => $price->id] )}}" class="d-inline">
                            @csrf
                            <input type="hidden" name="state" value="{{$price->is_active}}">
                            @if ($price->is_active)
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
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

  @if (session('deleted') == 'Eliminado')
    <script>
      Swal.fire({
            icon: 'success',
            title: 'Eliminado!',

            html: `
            Se ha eliminado con exito
            `,
            confirmButtonText: 'Aceptar'
          })
    </script>
  @endif

  <script>
    $('.form-delete').submit(function(e){
      e.preventDefault()

      Swal.fire({
      title: '¿Estas seguro?',
      text: "Se eliminará definitivamente!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, Eliminar!',
      cancelButtonText: 'Cancelar'

      }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
      })
    })
  </script>

  <script>
    const $cards = document.querySelectorAll('.render-html-card')
    $cards.forEach( $card => {
      const $links = $card.querySelectorAll('p > a')
      $links.forEach( $link => {
        $link.setAttribute('class','text-primary')
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

