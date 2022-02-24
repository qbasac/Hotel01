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

                    {{-- <div class="col-12 mb-2">
                      <div class="form-group">
                        <input class="form-check-input" type="checkbox" name="is_change_password" id="is_change_password" value="{{true}}" {{ old('is_change_password') ? 'checked' : '' }}>
                        <label for="is_change_password" class="form-check-label user-select-none cursor-pointer " for="flexCheckIndeterminate">Cambiar contraseña</label>
                      </div>
                    </div> --}}

                    <div class="d-flex align-items-start">
                      <div>
                        <input type="checkbox" switch="none" name="is_change_password" value="{{false}}" id="is_change_password" {{ old('is_change_password') ? 'checked' : '' }}>
                        <label class="form-label form-l" for="is_change_password" data-on-label="Si" data-off-label="No"></label>
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
                          <input ID="txtPassword" type="Password" Class="form-control" name="current_password" autocomplete="current-password" placeholder="********">
                        </div>
                      </div>

                      <div class="col-12 mb-2">
                        <label class="form-label m-0">Confirmar contraseña</label>
                        <div class="input-group">
                          <input id="new_confirm_password" type="password" class="form-control " name="new_confirm_password" autocomplete="current-password" placeholder="********">
                        </div>
                      </div>
                    </div>



                    <div class="row">

                      {{-- <div class="d-none" >
                      </div> --}}

                      {{-- <div class="d-none" id="inputs-change-password">
                        <div class="row">
                          <div class="col-12">
                            <label for="password" class="col-form-label text-md-right text-right">Contraseña actual</label>
                            <input ID="txtPassword" type="Password" Class="form-control" name="current_password" autocomplete="current-password" placeholder="********">
                            <div class="input-group-append">
                              <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 col-lg-4 ">
                            <label for="password" class="col-form-label text-md-right">Nueva contraseña</label>
                          </div>
                          <div class="col-12 col-lg-6">
                            <div class="input-group">
                              <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password" placeholder="********">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 col-lg-4">
                            <label for="password" class="col-form-label text-md-right">Confirmar contraseña</label>
                            <input id="new_confirm_password" type="password" class="form-control " name="new_confirm_password" autocomplete="current-password" placeholder="********">
                          </div>
                        </div>
                      </div> --}}
                    </div>
                    <div class="col-12 col-lg-12">
                      <button type="submit" class="btn btn-primary"> Actualizar perfil </button>
                    </div>
                  </div>
                {{-- </div> --}}

                    <div class="col-12 col-lg-5  text-center">
                      <img src="{{ asset('storage/users/'.Auth::user()->avatar) }}" alt="oscarthemes">
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

  @endsection
