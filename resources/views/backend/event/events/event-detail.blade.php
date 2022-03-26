@extends('backend.layouts.app')

@php
  use \Carbon\Carbon;
@endphp

@section('sub-title')
    Eventos
@endsection

@section('styles')
<style>
    .file_container {
      width: 100%;
      height: 300px;
      position: relative;
      border-radius: 10px;
      border-radius: inherit;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 0;
      overflow: auto;
      border: 1px solid #CBD1D7;
    }

    .file_input {
      width: 100%;
      height: 100%;
      position: absolute;
      opacity: 0;
      z-index: 1;
      cursor: pointer;
      border-radius: inherit;
    }

    .file_letter {
      font-size: 1.5rem;
    }

    .file_image {
      z-index: 0;
      height: 100%;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      margin: auto;
    }
    .color-upload-img{
      color: #5f9eff;
    }
    .color-img-upload{
      color: rgb(50, 50, 114);
    }

    .container-detail{
      text-align: -webkit-center;
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
              <a href="{{ route('admin.events.index') }}" class="fas fa-chevron-circle-left btn-sm"></a>
              Detalles del evento
            </h6>
          </div>
          <hr>

          <div class="col-md-12 container-detail">
            <div class=" col-xl-6">
              <div class="card bg-light border border-3">
                  <img class="card-img-top img-fluid rounded-top" src="{{ asset('storage/events-image/'.$event->image) }}" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title">{{ $event->name }}</h4>
                      <p class="card-text ">
                       <div class="p_description">
                         {!! $event->description !!}
                       </div>
                      </p>

                      <div class="col-12">
                        @foreach ($event->eventOrganizerDetail as $organizer)
                        <h6>{{ $organizer->organizer->name }}</h6>
                        @endforeach
                      </div>
                      {{-- <div class="col-12">
                        <i class="fa fa-calendar"></i><span> {{ \Carbon\Carbon::parse($event->date_event)->format('d-m-Y')}} </span> │ <i class="fa fa-map-marker"></i><span> {{ $event->place_celebration }}</span>
                      </div> --}}

                      <div class="table-responsive">
                        <table class="table table-bordered  mb-0">
                            <tbody class="border border-warning">
                                <tr>
                                  <td>
                                    <div class="text">
                                      <h6 class="title"><i class="fa fa-regular fa-clock text-warning"></i> Hora de inicio</h6>
                                      <p>{{ \Carbon\Carbon::parse($event->star_time)->format('g:i A')}}</p>
                                      {{-- $date->isoFormat('LLLL'); --}}
                                      <p>{{ Carbon::parse($event->date_event)->isoFormat('LLLL') }}</p>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="text">
                                      <h6 class="title"><i class="fa fa-regular fa-clock text-warning"></i> Tiempo de finalización</h6>
                                      <p>{{ \Carbon\Carbon::parse($event->time_completion)->format('g:i A')}}</p>
                                      <p>{{ Carbon::parse($event->date_event)->isoFormat('dddd, DD MMMM YYYY') }}</p>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="text">
                                      <h6 class="title"><i class="fa fa-map-marker text-warning"></i> Lugar de celebración</h6>
                                      <p>{{ $event->place_celebration}}</p>
                                    </div>
                                  </td>
                                </tr>
                            </tbody>
                        </table>
                      </div>


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
                      @else
                      <div class="col-12 mt-3">
                        <div class="card-title  justify-content-center"><span class="badge bg-soft-danger rounded-pill text-danger" ><i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                          Pasado</span>
                        </div>
                      </div>
                      @endif
                  </div>
                  <hr class=" card_separator">

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
                    </div>
                  </div>
              </div>
            </div>
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
      const $cardDescription = document.querySelectorAll('.p_description')
      $cardDescription.forEach( $cardDescription => {

      const $links = $cardDescription.querySelectorAll('p > a')
      $links.forEach( $link => {
        $link.target = '_blank'
        $link.setAttribute('style', `
        color: #1B82EC;
          `)
        })


      $listItem = $cardDescription.querySelectorAll('p')
        $listItem.forEach( item => {
          item.setAttribute('style', `
          text-align: justify;
          `)
        })
      })
  </script>

@endsection

