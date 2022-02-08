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
          <div class="card-title text-primary">
            <i class="fas fa-user"></i> Mi cuenta
          </div>
          <hr>
          <div class="card-body">
            @foreach ($errors->all() as $error)
               <p class="text-danger">{{ $error }}</p>
            @endforeach

            <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                @csrf
                <div class="row">
                  <div class="col-sm-12 col-md-7 form-group mb-3 row">
                    <label for="nick_name" class="col-md-4 col-form-label text-md-right text-right">Nombres</label>
                    <div class="col-md-6">
                      <input id="nick_name" type="text" class="form-control input-profile" name="nick_name" placeholder="Complete este campo" value="{{Auth::user()->nick_name}}" autofocus>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-7 form-group mb-3 row">
                    <label for="email" class="col-md-4 col-form-label text-md-right text-right">Correo electrónico</label>
                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control input-profile" name="email" placeholder="Complete este campo" value="{{Auth::user()->email}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <input class="form-check-input" type="checkbox"   name="is_change_password" id="is_change_password" value="{{true}}" {{ old('is_change_password') ? 'checked' : '' }}>
                    <label for="is_change_password" class="form-check-label user-select-none cursor-pointer "  for="flexCheckIndeterminate" >Cambiar contraseña</label>
                  </div>

                  <div class="col-sm-12 col-md-7 d-none" id="inputs-change-password">
                    <div class="form-group mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-right text-right">Contraseña actual</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control input-profile" name="current_password" autocomplete="current-password" placeholder="********">
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Nueva contraseña</label>

                        <div class="col-md-6">
                            <input id="new_password" type="password" class="form-control input-profile" name="new_password" autocomplete="current-password" placeholder="********">
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                        <div class="col-md-6">
                            <input id="new_confirm_password" type="password" class="form-control input-profile" name="new_confirm_password" autocomplete="current-password" placeholder="********">
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
    $isChangePassword.addEventListener('change', function () {
      setClassTogggleDiplay()
    })

    function setClassTogggleDiplay() {
      const method = $isChangePassword.checked ? 'remove' : 'add'
      $inputsChangePassword.classList[method]('d-none')
    }

    setClassTogggleDiplay()

  </script>
@endsection
