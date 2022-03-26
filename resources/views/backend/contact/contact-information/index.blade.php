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

    iframe{
      width: 100%;
      height: 300px;
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
              <i class="fas fa-address-card"></i> Contacto
            </h6>
          </div>
          <hr>
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
          </svg>

          @if (session('updated'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('updated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <div class="col-md-12 container-detail">
            <div class=" col-xl-10">
              <div class="card bg-light border border-3">
                {!! $contact->direction_map !!}

                  <div class="card-body">
                   <div class="row">
                     <div class="col-xl-4 ">
                       <div class="card m-1 shadow-none">
                         <div class="card-body">
                           <h5 class="text-center">DIRECCIÓN</h5>
                           <p class="card-text">{{ $contact->direction}}</p>
                         </div>
                       </div>
                     </div>
                     <div class="col-xl-4 ">
                      <div class="card m-1 shadow-none">
                        <div class="card-body">
                          <h5 class="text-center">TELÉFONO</h5>
                          <p class="card-text">{{ $contact->phone}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 ">
                      <div class="card m-1 shadow-none">
                        <div class="card-body">
                          <h5 class="text-center">CORREO</h5>
                          <p class="card-text">{{ $contact->email}}</p>
                        </div>
                      </div>
                    </div>
                   </div>
                  </div>

                  <hr class=" card_separator">

                  <div class="card-body">
                    <div class="col text-center">
                      <a href="{{ route('admin.contact.edit', ['contact' => $contact->id] ) }}" class="btn btn-sm btn-primary" title="Editar">
                        <i class="far fa-edit"></i> Editar
                      </a>
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

