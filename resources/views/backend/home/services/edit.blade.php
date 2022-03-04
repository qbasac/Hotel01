@extends('backend.layouts.app')

@section('sub-title')
    Servicios
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="fas fa-hotel me-1"></i> Editar
            </h6>
            <div>
              <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Nuevo <i class="fas fa-plus"></i></a>

            </div>
          </div>
          <hr>

        editar


        </div>
      </div>
    </div>
  </div>
</div>
@endsection


