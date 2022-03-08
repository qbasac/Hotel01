@extends('backend.layouts.app')

@section('sub-title')
  Galería
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
      height: 150px;
      position: relative;
      border-radius: 10px;
      border-radius: inherit;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 0;
      overflow: auto;
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
    .texto-encima{
    position: absolute;
    top: 0px;
    left: 0px;
    height: 50px;
    width: 50px;
    border-radius: 5px 0px 50px 0px;
    background: #1b82ec;
    cursor: pointer;
    }
    .icon-change-image{
    margin-left: 10px;
    margin-top: 5px;
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
              <i class="fas fa-images"></i>
              Nuestra galería
            </h6>
            <div>
             <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">Nuevo <i class="fas fa-plus"></i></a>
             <form  method="POST" action="{{route('admin.gallery.ShowSectionGallery', ['gallery' => $home->id] )}}" class="d-inline">
              @csrf
              <input type="hidden" name="state" value="{{$home->show_section_gallery}}">
              @if ($home->show_section_gallery)
              <button style="margin-left: 5px;"  type="submit" class="btn btn btn-danger float-end" title="">
                Ocultar galería <i class="fas fa-eye-slash"></i>
              </button>
              @else
              <button style="margin-right: 5px;" type="submit" class="btn btn btn-success " title="Cambiar estado">
                Mostrar galería <i class="fas fa-eye"></i>
              </button>
              @endif
            </form>
            </div>
          </div>
          <hr>
          
            <div class="row">
              @foreach ($galleries as $gallery)
                <div class="col-xl-3 col-lg-6  ">
                  <div class="card m-3 bg-light rounded">
                    <form action="{{ route('admin.gallery.update', ['gallery' => $gallery->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
                      @method('PUT')
                      @csrf

                      <div class="mb-3">
                        <div class="file_container">
                          <input type="file" class="file_input" onchange="previewImage(event, {{$gallery->id}})"  name="image" accept="image/*">
                          <img class="file_image  card-img-top rounded-top" id="image-preview-{{$gallery->id}}"  src="{{ asset('storage/gallery-image/'.$gallery->image) }}" alt="oscarthemes">
                          <div class="texto-encima file_containe">
                            <div class="icon-change-image">
                              <h3><i class="fas fa-camera text-white"></i></h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=" row card-body text-center">
                        <label>Descripción</label>
                        {{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam asperiores excepturi aperiam voluptatum dolorum alias voluptate modi! Perferendis in, ex corporis mollitia perspiciatis earum asperiores. --}}
                        <textarea class="form-control" id="editor-{{$gallery->id}}" name="description">{{$gallery->description}}</textarea>
                      </div>

                      <div class="text-center p-2">
                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-sm btn-light border border-secondary" tabindex="4">Cancelar</a>
                        <button  type="submit" class="btn btn-sm btn-primary" tabindex="3">Actualizar cambios</button>
                      </div>
                    </form>
                     <div class="text-end pb-1">
                        <form method="POST" action="{{route('admin.gallery.updateIsActive', ['gallery' => $gallery->id] )}}" class="d-inline">
                          @csrf
                          <input type="hidden" name="state" value="{{$gallery->is_active}}">
                          @if ($gallery->is_active)
                            <button type="submit"
                              class="btn btn-sm btn-success"
                              title="Cambiar estado">
                              <i class="far fa-check-circle"></i>
                            </button>
                          @else
                            <button type="submit"
                              class="btn btn-sm btn-danger"
                              title="Cambiar estado">
                              <i class="far fa-times-circle"></i>
                            </button>
                          @endif
                        </form>
                        <form action="{{ route('admin.gallery.destroy',$gallery->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" title="Eliminar" class="btn btn-sm btn-danger text-center"><i class="far fa-trash-alt"></i></button>
                        </form>

                     </div>
                  </div>
                </div>
              @endforeach
           </div>



        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

  <script>
    $(document).ready(function() {

    $('.delete-form').on('submit', function(e) {
      e.preventDefault();
      var button = $(this);

      Swal.fire({
        icon: 'warning',
          title: 'Are you sure you want to delete this record?',
          showDenyButton: false,
          showCancelButton: true,
          confirmButtonText: 'Yes'
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          $.ajax({
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: button.data('route'),
            data: {
              '_method': 'delete'
            },
            success: function (response, textStatus, xhr) {
              Swal.fire({
                icon: 'success',
                  title: response,
                  showDenyButton: false,
                  showCancelButton: false,
                  confirmButtonText: 'Yes'
              }).then((result) => {
                window.location='/posts'
              });
            }
          });
        }
      });

    })
    });
</script>


  <script>
      let fileInput,
      fileImage = document.querySelectorAll('.file_image'),
      letterUpload = document.querySelector('.letter-upload');

      function previewImage(event, id) {
        const $currentImage = document.getElementById(`image-preview-${id}`)

        const file = event.target.files[0]
        const reader = new FileReader(file)
        reader.onload = _ => $currentImage.src = reader.result
        reader.readAsDataURL(file)
      }
  </script>
@endsection

