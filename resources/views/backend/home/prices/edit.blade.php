@extends('backend.layouts.app')

@section('sub-title')
    Precios
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h6 class="text-primary">
              <i class="far fa-money-bill-alt"></i>
              Editar
            </h6>

          </div>
          <hr>
          <form action="{{ route('admin.prices.update', ['price' => $price->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
           @method('PUT')
           @csrf
           <div class="mb-3">
            <label for="title" class="form-label">Precio
              <span class="span-reqrired">*</span>
            </label>
            <input id="price" name="price" type="text" value="{{$price->price}}" placeholder="Complete este campo..."
              class="form-control input-price @error('price') is-invalid @enderror">
              @error('price')
                <small class="text-danger input-price"> {{ $message }}</small>
              @enderror
           </div>
           <div class="mb-3">
            <label for="title" class="form-label">Fecha
              <span class="span-reqrired">*</span>
            </label>
            <input id="date" name="date" type="text"  value="{{$price->date}}" placeholder="Complete este campo..."
              class="form-control input-date @error('date') is-invalid @enderror">
              @error('date')
                <small class="text-danger input-date"> {{ $message }}</small>
              @enderror
            {{-- <input > --}}
           </div>
           <div class="form-group mb-3">
            <label class="mb-0" for="">Imagen
              <span class="span-reqrired">*</span>
            </label>
            <input type="file" accept="image/jpeg, image/png" class="form-control" value="{{$price->image}}" name="image" id="image">
           </div>
           <textarea id="editor" name="description">{{$price->description}}</textarea>

            <br>
            <a href="{{ route('admin.prices.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
            <button type="submit" value="Send" class="btn btn-primary" tabindex="3">Actualizar</button>
          </form>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('backend/ckeditor5-classic/ckeditor.js') }}"></script>
  <script src="{{ asset('backend/ckeditor5-classic/translations/es.js') }}"></script>
  <script>
    const $editor = document.querySelector('#editor')
    const config = {
      toolbar: [ 'heading', '|', 'link', 'bulletedList', 'insertTable'],
      language: 'es',
      heading: {
        options: [
          { model: 'paragraph', title: 'Parráfo', class: 'ck-heading_paragraph' },
          { model: 'heading1', view: 'h1', title: 'Título', class: 'ck-heading_heading1' },
          { model: 'heading2', view: 'h2', title: 'Sub titulo', class: 'ck-heading_heading2' }
        ]
      },
    }

    ClassicEditor.create($editor, config)


    observerHTML('input-price')
    observerHTML('input-date')

    function observerHTML(className) {
      const $inputPrices = document.querySelectorAll('.'+ className)
      $inputPrices.forEach(element => {
        if(element.tagName === 'INPUT') {
          element.addEventListener('input', function () {
            this.classList.remove('is-invalid')
            if(element.nextElementSibling && element.nextElementSibling.tagName == 'SMALL') {
              element.nextElementSibling.classList.add('d-none')
            }
          })
        }
      })
    }
  </script>
@endsection
