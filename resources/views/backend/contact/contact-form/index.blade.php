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
              <i class="fas fa-comment "></i> Mensajes
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

          <div class="card shadow-none">
            <div class="card-body">
                <div data-simplebar="init" ><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -20px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll; padding-right: 20px; padding-bottom: 0px;"><div class="simplebar-content" style="padding: 0px;">
                    <div class="inbox-wid">
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img src="https://electronicssoftware.net/wp-content/uploads/user.png" class="avatar-md rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 text-dark">Irene</h6>
                                <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                    available...</p>
                                <p class="inbox-item-date text-muted">13:40 PM</p>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img src="https://electronicssoftware.net/wp-content/uploads/user.png" class="avatar-md rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 text-dark">Jennifer</h6>
                                <p class="inbox-item-text text-muted mb-0">I've finished it! See
                                    you
                                    so...</p>
                                <p class="inbox-item-date text-muted">13:34 PM</p>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img src="https://electronicssoftware.net/wp-content/uploads/user.png" class="avatar-md rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 text-dark">Richard</h6>
                                <p class="inbox-item-text text-muted mb-0">This theme is
                                    awesome!
                                </p>
                                <p class="inbox-item-date text-muted">13:17 PM</p>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img src="https://electronicssoftware.net/wp-content/uploads/user.png" class="avatar-md rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 text-dark">Martin</h6>
                                <p class="inbox-item-text text-muted mb-0">Nice to meet you</p>
                                <p class="inbox-item-date text-muted">12:20 PM</p>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="inbox-item">
                                <div class="inbox-item-img float-start me-3"><img src="https://electronicssoftware.net/wp-content/uploads/user.png" class="avatar-md rounded-circle" alt=""></div>
                                <h6 class="inbox-item-author mb-1 text-dark">Sean</h6>
                                <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                    available...</p>
                                <p class="inbox-item-date text-muted">11:47 AM</p>
                            </div>
                        </a>
                    </div>
                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 345px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 343px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
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

