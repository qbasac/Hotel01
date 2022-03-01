@extends('backend.layouts.app')

@section('title')
Inicio
@endsection

@section('sub-title')
Inicio
@endsection

@section('styles')
  <style>
    .column-description {
      inline-size: 200px;
      max-inline-size: 200px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
    }

    .vertical-align-middle > td {
      vertical-align: middle;
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
              <i class="fas fa-percent"></i> Nuestras ofertas
            </h6>
             <div>
              <a href="{{ route('admin.home-offers.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a>
              <form  method="POST" action="{{route('admin.home-offers.ShowSectionOffers', ['offers' => $home->id] )}}" class="d-inline">
                @csrf
                <input type="hidden" name="state" value="{{$home->show_section_offers}}">
                @if ($home->show_section_offers)
                <button style="margin-right: 5px;"  type="submit" class="btn btn btn-danger float-end" title="">
                  Ocultar ofertas <i class="fas fa-eye-slash"></i>
                </button>
                @else
                <button style="margin-right: 5px;" type="submit" class="btn btn btn-success " title="Cambiar estado">
                  Mostrar ofertas <i class="fas fa-eye"></i>
                </button>
                @endif
              </form>
            </div>
          </div>
          <hr>
          @if (session('created'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if (session('updated'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('updated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if (session('deleted'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('deleted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <div class="table-responsive">
            <table class="table table-sm table-striped mt-4">
              <thead>
                  <tr>
                    <th style="width: 120px;" scope="col">Opciones</th>
                    <th style="width: 90px;" scope="col">Estado</th>
                    <th style="min-inline-size: 120px;">Título</th>
                    <th style="min-inline-size: 120px;">Porcentaje del descuento</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                  </tr>
              </thead>
              <tbody class="vertical-align-middle">
                @foreach ($offers as $offer)
                  <tr>
                    <td style=" text-align: left;vertical-align: middle;">
                      <a href="{{ route('admin.home-offers.edit', ['home_offer' => $offer->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>
                      <form action="{{ route('admin.home-offers.destroy',$offer->id) }}"  method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" title="Eliminar" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                      </form>

                      <form method="POST" action="{{route('admin.home-offers.updateIsActive', ['offer' => $offer->id] )}}" class="d-inline">
                        @csrf
                        <input type="hidden" name="state" value="{{$offer->is_active}}">
                        @if ($offer->is_active)
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

                      <td style="vertical-align: middle;">
                          @if ($offer->is_active)
                          <span style="width: 60px;" class="badge rounded-pill bg-success">{{$offer->is_active ? 'Activo' : 'Inactivo'}}
                          @else
                          <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$offer->is_active ? 'Activo' : 'Inactivo'}}
                          @endif</span>
                      </td>
                      <td>{{$offer->title}}</td>
                      <td>{{$offer->discount_percentage}} %</td>
                      <td>{{$offer->description}}</td>
                      <td>
                        @if ($offer->offer_image)
                          <img src="{{ asset('storage/offers-image/'.$offer->offer_image) }}"  width="60" height="30">
                        @else
                          <img src="{{ asset('assets/offer-image/image-offer-default.png') }}"  width="60" height="30">
                        @endif
                      </td>
                     </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {{ $offers->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
