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
  height: 300px;
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
/* CODE SNIPPETS CSS */
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
          <div class="card-body">
            @foreach ($errors->all() as $error)
            <p class="text-danger">{{ $error }}</p>
            @endforeach

            <form method="POST" action="{{ route('profile.update') }}" class="row justify-content-between" autocomplete="off">
              @csrf
                  <div class="col-12 col-md-6 col-lg-4 mb-2">
                    <div class="form-group mb-2">
                      <label for="nick_name" class="form-label" class="">
                        Nombres
                        <span class="span-reqrired">*</span>
                      </label>
                      <input id="nick_name" type="text" class="form-control" name="nick_name" placeholder="Complete este campo" value="{{ Auth::user()->nick_name }}" autofocus>
                    </div>

                    <div class="form-group mb-2">
                      <label for="nick_name" class="form-label">
                        Correo electrónico
                        <span class="span-reqrired">*</span>
                      </label>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Complete este campo" value="{{Auth::user()->email}}">
                    </div>

                    <div class="d-flex align-items-start">
                      <div>
                        <input type="checkbox" class="form-check-input" switch="none"  name="is_change_password"  id="is_change_password" value="{{true}}" {{ old('is_change_password') ? 'checked' : '' }}>
                        <label for="is_change_password" class="form-check-label user-select-none cursor-pointer " for="flexCheckIndeterminate" data-on-label="Si" data-off-label="No"></label>
                      </div>
                      <div style="padding-block-start: 3px;">Cambiar contraseña</div>
                    </div> 

                     <div class="d-none row" id="inputs-change-password">
                      <div class="col-12 mb-2">
                        <label class="form-label m-0">Contraseña actual</label>
                        <div class="input-group">
                          <input ID="txtPassword" type="text" Class="form-control" name="current_password" autocomplete="current-password" placeholder="********">
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
                      <button type="submit" class="btn btn-primary"> Actualizar perfil </button>
                    </div>
                  </div>


                  
                     <!-- <div class="col-12 col-lg-5  text-center">
                          <div class="mb-3">
                          <label class="mb-0" for="">Avatar <small class="text-muted"> (Tamaño de imagen recomendado 220px x 290px) </small></label>
                          <input type="file" accept="image/*" class="form-control" name="avatar" id="avatar">
                        </div>
                     </div>      -->

                     <div class="col-12 col-lg-5  text-center">
                        <div class="file_container">
                          <input  type="file" class="file_input" id="file_input" name="avatar" accept="image/*">
                            <img id="file_image" class="file_image" src="{{ asset('storage/users/'.Auth::user()->avatar) }}" alt="oscarthemes">
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

  @endsection
