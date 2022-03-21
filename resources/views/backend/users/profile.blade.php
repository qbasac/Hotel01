@extends('backend.layouts.app')

@section('title')
Perfil
@endsection

@section('sub-title')
Usuarios
@endsection

@section('styles')
<style>


  .input-profile {
    border-left: none;
    border-top: none;
    border-right: none;
    border-width: 3px;
  }

  input[switch]+label,
  input[switch]:checked+label:before,
  input[switch]:checked+label:after {
    transform: scale(.9)
  }

  /* CODE SNIPPETS CSS */

  .file_container {
    width: 100%;
    height: 200px;
    position: relative;
    border-radius: 10px;
    border-radius: inherit;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 0;
    overflow: auto;
  }

  .file_container::-webkit-scrollbar {
    width: 10px;
    height: 10px;
    display: block;
  }
  .file_container::-webkit-scrollbar-thumb {
    background-color: rgb(145, 145, 145);
    border-radius: 20px;
  }

  .file_container::-webkit-scrollbar-track {
    background-color: white;
  }
  .file_input {
    width: 200px;
    height: 100%;
    position: absolute;
    opacity: 0;
    z-index: 1;
    cursor: pointer;
    border-radius: 50%;
    }

  .file_letter {
    font-size: 1.5rem;
  }

  .file_image {
    z-index: 0;
    height: 100%;
    width: 200px;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    margin: auto;
    border-radius: 50%;
  }

  .texto-encima{
    position: absolute;
    top: 65%;
    left: 130px;
    /* right: 2%; */
    height: 50px;
    width: 50px;
    border-radius: 50%;
    background: #1b82ec;
    cursor: pointer;
    }
    .icon-change-image{
      margin-left: 15px;
      margin-top: 14px;
      width: 10px;
    }
    .fa-icon-camera {
    font-size: 1.5em;
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
              <i class="fas fa-user"></i> Mi cuenta
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

          <div class="card-body">
            @foreach ($errors->all() as $error)
            <p class="text-danger">{{ $error }}</p>
            @endforeach

            <form method="POST" action="{{ route('profile.update') }}" class="row justify-content-between" enctype="multipart/form-data" autocomplete="off">
              @csrf
                  <div class="col-12 col-md-7  mb-2">
                    <div class="form-group mb-2">
                      <label for="nick_name" class="form-label" class="">
                        Apodo
                        <span class="span-reqrired">*</span>
                      </label>
                      <input id="nick_name" type="text" class="form-control form-submit" name="nick_name" placeholder="Complete este campo" value="{{ Auth::user()->nick_name }}">
                    </div>

                    <div class="form-group mb-2">
                      <label for="nick_name" class="form-label">
                        Correo electrónico
                        <span class="span-reqrired">*</span>
                      </label>
                      <input id="email" type="email" class="form-control form-submit" name="email" placeholder="Complete este campo" value="{{Auth::user()->email}}">
                    </div>

                    <div class="d-flex align-items-start">
                      <div>
                        <input type="checkbox" class="form-check-input form-submit" switch="none"  name="is_change_password"  id="is_change_password" value="{{true}}" {{ old('is_change_password') ? 'checked' : '' }}>
                        <label for="is_change_password" class="form-check-label user-select-none cursor-pointer " for="flexCheckIndeterminate" data-on-label="Si" data-off-label="No"></label>
                      </div>
                      <div style="padding-block-start: 3px;">Cambiar contraseña</div>
                    </div>

                     <div class="d-none row" id="inputs-change-password">
                      <div class="col-12 mb-2">
                        <label class="form-label m-0">Contraseña actual</label>
                        <div class="input-group">
                          <input ID="txtPassword" type="text" Class="form-control form-submit" name="current_password" autocomplete="current-password" placeholder="********">
                          <div class="input-group-append">
                            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 mb-2">
                        <label class="form-label m-0">Nueva contraseña</label>
                        <div class="input-group">
                              <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password" placeholder="********">
                        </div>
                      </div>

                      <div class="col-12 mb-2">
                        <label class="form-label m-0">Confirmar contraseña</label>
                        <div class="input-group">
                          <input id="new_confirm_password" type="password" class="form-control " name="new_confirm_password" autocomplete="current-password" placeholder="********">
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-lg-12">
                      <button type="submit" class="btn btn-primary" id="submit" disabled="disabled"> Actualizar perfil </button>
                    </div>
                  </div>



                   <div class="col-12 col-lg-5  text-center ">
                       <div class="file_container">
                         <input  type="file" class="file_input form-submit" id="file_input" name="avatar" accept="image/*">
                           <img id="file_image" class="file_image card-img-top" src="{{ asset('storage/users/'.Auth::user()->avatar) }}" alt="oscarthemes">
                           <div class="texto-encima file_image ">
                            <div class="icon-change-image">
                              <i class="fas fa-camera text-white fa-icon-camera"></i>
                            </div>
                          </div>
                          </input>
                       </div>
                   </div>

                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('scripts')
  <script>
    const $isChangePassword = document.getElementById('is_change_password')
    const $inputsChangePassword = document.getElementById('inputs-change-password')
    $isChangePassword.addEventListener('change', function() {
      setClassTogggleDiplay()
    })

    function setClassTogggleDiplay() {
      const method = $isChangePassword.checked ? 'remove' : 'add'
      $inputsChangePassword.classList[method]('d-none')
    }
    setClassTogggleDiplay()
  </script>

  <script>
    function mostrarPassword() {
      var cambio = document.getElementById("txtPassword");
      if (cambio.type == "password") {
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      } else {
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
      }
    }
    mostrarPassword()
  </script>

  <script>
      let fileInput,
      fileImage = document.querySelector('#file_image'),
      letterUpload = document.querySelector('#letter-upload');

      if(fileInput = document.querySelector('#file_input')) {
      fileInput.addEventListener('change', function (e) {
      const file = e.target.files[0]
      const reader = new FileReader(file)
      reader.onload = (e) => fileImage.src = reader.result
      reader.readAsDataURL(file)
      letterUpload.style.opacity = '0'
    })
  }
  </script>

<script>
    $(document).ready(function () {
        $('.form-submit').on('input change', function () {
            if ($(this).val() != '') {
                $('#submit').prop('disabled', false);
            }
            else {
                $('#submit').prop('disabled', true);
            }
        });
    });
</script>
@endsection
