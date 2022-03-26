@extends('backend.layouts.app')

@php
  use \Carbon\Carbon;
@endphp

@section('sub-title')
    Eventos
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



              <div class="accordion" id="accordionMasagges">
                @foreach ($contact_forms as $message)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-message-{{$message->id}}">
                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-message-{{$message->id}}" aria-expanded="false" aria-controls="collapse-message-{{$message->id}}">
                      <div class="inbox-item-img float-start me-3"><img src="https://electronicssoftware.net/wp-content/uploads/user.png" class="avatar-md rounded-circle" alt=""></div>
                      {{ $message->name }}
                    </button>
                  </h2>
                  <div id="collapse-message-{{$message->id}}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading-message-{{$message->id}}" data-bs-parent="#accordionMasagges" style="">
                    <div class="accordion-body">
                      <h6>Asunto: {{ $message->subject }}</h6>
                      <p>Mensaje: {{ $message->message }}</p>

                      <form action="{{ route('admin.contact-form.destroy',$message->id) }}"  method="POST" class="form-delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Eliminar" class="btn btn-sm btn-danger  float-end btn-delete"><i class="far fa-trash-alt"></i> Eliminar</button>
                      </form>

                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="mt-2">
                {{ $contact_forms->links() }}
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

