@extends('frontend.layouts.app')

@section('content')
<div data-stellar-background-ratio="0.5" class="parallax-section chr-sub-banner text-center">
    <div class="container">
        <h5>Crear una cuenta</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Crear una cuenta</li>
        </ol>
    </div>
</div>
<!--Banner Wrap End-->
<div class="main-contant">
    <!--Blog Section Start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <form class="chr-login">
                        <!--Heading 1 Start-->
                        <div class="headind-1">
                            <h3 class="title">Crear una cuenta</h3>
                        </div>
                        <!--Heading 1 End-->
                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" placeholder="Nombre">
                        </div>
                        <div class="input-field">
                            <label>Apellido</label>
                            <input type="text" placeholder="Apellido">
                        </div>
                        <div class="input-field">
                            <label>contraseña</label>
                            <input type="password" placeholder="********" maxlength="8">
                        </div>
                        <div class="input-field">
                            <label>Confirmar contraseña</label>
                            <input type="password" placeholder="********" maxlength="8">
                        </div>
                        <div class="input-field">
                            <label>Su móvil</label>
                            <input type="text" placeholder="+92-000-0000000" maxlength="15">
                        </div>
                        <div class="input-field">
                            <input type="submit" value="Crear una cuenta">
                        </div>
                        <div>¿Ya tiene cuenta? <a class="readmore-btn" href="login.html">Entrar en el sistema</a> </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Section End-->
</div>
@endsection
