@extends('backend.layouts.app')

@php
  use \Carbon\Carbon;
@endphp

@section('sub-title')
Suscripciones
@endsection

@section('styles')
<style>
  .btn-delete{
    margin-top: -20px;
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
                 <i class="fas fa-envelope"></i> Suscripciones
            </h6>
          </div>
          <hr>

            <div class="col-xl-12">
                <div class="inbox-wid">
                    @foreach ($subscriptions as $subscription)
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3">
                                    <h1 class="text-success">
                                        <i class="fas fa-envelope"></i>
                                    </h1>
                                </div>
                                <h6 class="inbox-item-author mb-1 text-dark">{{ $subscription->email }}</h6>
                                <p class="inbox-item-text text-muted mb-0">
                                      {{ \Carbon\Carbon::parse($subscription->created_at)->format('d-m-Y')}} 
                                </p>
                                <p class="inbox-item-date">
                                    <form action="{{ route('admin.subscriptions.destroy',$subscription->id) }}"  method="POST" class="form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Eliminar" class="btn btn-sm btn-danger  float-end btn-delete"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </p>
                            </div>
                        </a>
                    @endforeach
                    <div class="mt-2">
                         {{ $subscriptions->links() }}
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

  <script>
    function vermas(id) {
      if (id == "mas") {
        document.getElementById("desplegar").style.display = "block";
        document.getElementById("mas").style.display = "none";
      }
      else {
        document.getElementById("desplegar").style.display = "none";
        document.getElementById("mas").style.display = "inline";
      }
    }
  </script>

@endsection

