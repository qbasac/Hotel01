@extends('backend.layouts.app')

@section('sub-title')
    Planes
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
      border: 1px solid #8fc4f9;
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
    .color-upload-img{
      color: #5f9eff;
    }
    .color-img-upload{
      color: rgb(50, 50, 114);
    }
    .card{

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
              <i class="mdi mdi-calendar-check"></i>
              Nuevo evento
            </h6>
          </div>
          <hr>
          <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="name" class="form-label">Nombre
                    <span class="span-reqrired">*</span>
                  </label>
                  <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}"  placeholder="Complete este campo" autofocus>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Descripción
                    <span class="span-reqrired">*</span>
                  </label>
                  <textarea id="description" name="description" type="text" class="form-control" value="{{ old('description') }}"  placeholder="Complete este campo" autofocus></textarea>
                </div>
                <div style="background: #e4f4ff;" class="file_container">
                  <input type="file" class="file_input" id="file_input" name="image" accept="image/*">
                  <img id="file_image" class="file_image">
                  <div id="letter-upload" class="file_letter">
                    <div class="text-center">
                        <h1 class="color-upload-img"><i class="fas fa-upload"></i></h1>
                    </div>
                    <h2 class="color-img-upload">Selecione una imagen</h2>
                    <hr>
                    <center>
                      <h6 class="color-upload-img">
                        O arrastra una imagen
                      </h6>
                    </center>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="date_event" class="form-label">Fecha del evento
                    <span class="span-reqrired">*</span>
                  </label>
                  <input id="date_event" name="date_event" type="date" class="form-control" value="{{ old('date_event') }}"  placeholder="Complete este campo" autofocus>
                </div>
                <div class="mb-3">
                  <label for="date_event" class="form-label">Hora de inicio
                    <span class="span-reqrired">*</span>
                  </label>
                  <input id="star_time" name="star_time" type="time" class="form-control" value="{{ old('star_time') }}"  placeholder="Complete este campo" autofocus>
                </div>
                <div class="mb-3">
                  <label for="time_completion" class="form-label">Tiempo de finalización
                    <span class="span-reqrired">*</span>
                  </label>
                  <input id="time_completion" name="time_completion" type="time" class="form-control" value="{{ old('time_completion') }}"  placeholder="Complete este campo" autofocus>
                </div>
                <div class="mb-3">
                  <label for="place_celebration" class="form-label">Lugar de celebración
                    <span class="span-reqrired">*</span>
                  </label>
                  <input id="place_celebration" name="place_celebration" type="text" class="form-control" value="{{ old('place_celebration') }}"  placeholder="Complete este campo" autofocus>
                </div>
              </div>

            <div class="col-12 mt-3">
              <a href="{{ route('admin.events.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
              <button type="submit" value="Send" class="btn btn-primary">Guardar <i class="far fa-paper-plane"></i></button>
            </div>
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

    ClassicEditor
      .create($editor, config)
      .then( editor => {
      } )
      .catch( error => {
      });

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


