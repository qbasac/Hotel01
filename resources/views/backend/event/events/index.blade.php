@extends('backend.layouts.app')

@php
  use Carbon\Carbon;
@endphp

@section('sub-title')
  Eventos
@endsection

@section('styles')
<style>
  .p_description {
    inline-size: 100%;
    block-size: 60px;
    max-inline-size: 100% !important;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
  }
  .card_separator{
    margin-bottom: 0px;
    margin-top: 0PX;
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
            <h6 class="text-primary">
              <i class="mdi mdi-calendar-check"></i>
              Nuestros eventos
            </h6>
            <div>
             <a href="{{ route('admin.events.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a>
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
            @foreach ($events as $event)
            <div class="col-md-6 col-xl-3">
              <div class="card bg-light">
                  <img class="card-img-top img-fluid rounded-top" src="{{ asset('storage/events-image/'.$event->image) }}" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title">{{ $event->name }}</h4>
                      <p class="card-text ">
                       <div class="p_description">
                         {!! $event->description !!}
                       </div>
                      </p>
                      <div class="col-12">
                        <i class="fa fa-calendar"></i><span> {{ \Carbon\Carbon::parse($event->date_event)->format('d-m-Y')}} </span> │ <i class="fa fa-map-marker"></i><span> {{ $event->place_celebration }}</span>
                      </div>
                      @php
                          $dateCurrent = now();
                          $dateEvent = Carbon::parse($event->date_event);
                      @endphp

                      @if ($event->state_event == 1)
                      <div class="col-12 mt-3">
                        <div class="card-title  justify-content-center"><span class="badge bg-soft-primary rounded-pill text-primary" ><i class="mdi mdi-checkbox-blank-circle text-primary"></i>
                          Actual</span>
                        </div>
                      </div>
                      @elseif ($event->state_event == 2)
                      <div class="col-12 mt-3">
                        <div class="card-title  justify-content-center"><span class="badge bg-soft-success rounded-pill text-success" ><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                          Proximo</span>
                        </div>
                      </div>

                      @elseif ($event->state_event == 0)
                      <div class="col-12 mt-3">
                        <div class="card-title  justify-content-center"><span class="badge bg-soft-danger rounded-pill text-danger" ><i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                          Pasado</span>
                        </div>
                      </div>
                      @endif
                  </div>
                  <hr class="card_separator">
                  <div class="card-body">
                    <div class="col text-center">
                      <a href="{{ route('admin.events.edit', ['event' => $event->id] ) }}" class="btn btn-sm btn-primary" title="Editar">
                        <i class="far fa-edit"></i>
                      </a>
                      <form action="{{ route('admin.events.destroy',$event->id) }}"  method="POST" class="d-inline form-delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form>
                      <form method="POST" action="{{route('admin.events.updateIsActive', ['events' => $event->id] )}}" class="d-inline">
                        @csrf
                        <input type="hidden" name="state" value="{{$event->is_active}}">
                        @if ($event->is_active)
                          <button type="submit"
                            class="btn btn-sm btn-success"
                            title="Cambiar estado">
                            <i class="far fa-check-circle"></i>
                          </button>
                        @else
                          <button type="submit"
                            class="btn btn-sm btn-danger"
                            title="Cambiar estado">
                            <i class="far fa-times-circle"></i>
                          </button>
                        @endif
                      </form>
                      <a href="{{ route('admin.event-detail', ['id' => $event->id] ) }}" class="btn btn-sm btn-primary" title="Ver detalles">
                        <i class="fas fa-eye"></i>
                      </a>
                    </div>
                  </div>
              </div>
            </div>
            @endforeach
            {{ $events->links() }}
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

