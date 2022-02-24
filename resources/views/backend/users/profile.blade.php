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

            <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
              @csrf

              <div class="row">
                <div class="col-12 col-lg-8 mb-3">
                  <div class="row">

                    <div class="col-12 col-lg-4 ">
                      <label for="nick_name" class="col-form-label text-md-right text-right">Nombres:</label>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="input-group">
                        <input id="nick_name" type="text" class="form-control" name="nick_name" placeholder="Complete este campo" value="{{Auth::user()->nick_name}}" autofocus>
                      </div>
                    </div>



                    <div class="col-12 col-lg-4">
                      <label for="nick_name" class="col-form-label text-md-right text-right">Correo electrónico:</label>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="input-group">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Complete este campo" value="{{Auth::user()->email}}">
                      </div>
                    </div>
                  </div>
                </div>
                <br>



                <div class="col-12 col-lg-4 bg-secondary">
                  <img src="{{ asset('storage/users/'.Auth::user()->avatar) }}"  width="100%" height="300px">
                </div>



                <!-- <div class="row">
                <div class="col-12 col-sm-6 col-md-2 border">
                  <label for="nick_name" class="col-form-label text-md-right text-right">Nombres:</label>
                </div>
                <div class="col-12 col-sm-6 col-md-4 border">
                    <div class="input-group">
                        <input id="nick_name" type="text" class="form-control" name="nick_name" placeholder="Complete este campo" value="{{Auth::user()->nick_name}}" autofocus>
                    </div>
                 </div>
                <div class="col-12 col-sm-12 col-md-1 border">space</div>
                <div class="col-12 col-sm-12 col-md-5 border">12 sm-6 md-4</div>
              </div>

              <div class="row">
                <div class="col-12 col-sm-6 col-md-2 border">
                  <label for="nick_name" class="col-form-label text-md-right text-right">Correo electrónico:</label>
                </div>
                <div class="col-12 col-sm-6 col-md-4 border">
                    <div class="input-group">
                      <input id="email" type="email" class="form-control" name="email" placeholder="Complete este campo" value="{{Auth::user()->email}}">
                    </div>
                 </div>
                <div class="col-12 col-sm-12 col-md-1 border">spacevbvbvbvbvbvbvbvbvbvbbcvbfvcvcvcv</div>
                <div class="col-12 col-sm-12 col-md-5 border">12 sm-6 md-4</div>
              </div> -->




                <div class="form-group">
                  <input class="form-check-input" type="checkbox" name="is_change_password" id="is_change_password" value="{{true}}" {{ old('is_change_password') ? 'checked' : '' }}>
                  <label for="is_change_password" class="form-check-label user-select-none cursor-pointer " for="flexCheckIndeterminate">Cambiar contraseña</label>
                </div>


                <div class="col-sm-12 col-md-7 d-none" id="inputs-change-password">
                  <div class="form-group mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-right text-right">Contraseña actual</label>
                    <div class="col-md-6">
                      <div class="input-group">
                        <input ID="txtPassword" type="Password" Class="form-control" name="current_password" autocomplete="current-password" placeholder="********">
                        <div class="input-group-append">
                          <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="form-group mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Nueva contraseña</label>
                    <div class="col-md-6">
                      <div class="input-group">
                        <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password" placeholder="********">
                      </div>
                    </div>
                  </div>

                  <div class="form-group mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>
                    <div class="col-md-6">
                      <div class="input-group">
                        <input id="new_confirm_password" type="password" class="form-control " name="new_confirm_password" autocomplete="current-password" placeholder="********">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary"> Actualizar perfil </button>
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
  </script>

  @endsection