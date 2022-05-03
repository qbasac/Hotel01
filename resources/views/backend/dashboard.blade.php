@extends('backend.layouts.app')

@section('sub-title')
    Dashboard
@endsection

@section('styles')
  <style>
    .icon{
      margin-top: 45px;
      color: #70b5ff !important;
    }
  </style>
@endsection

@section('content')
  <div class="page-content-wrapper">
    <div class="row">
      <div class="col-xl-3 col-md-6">
          <a href="{{ route('usuario.index') }}" class="card bg-primary mini-stat position-relative">
              <div class="card-body">
                  <div class="mini-stat-desc">
                      <div class="text-white">
                          <h5 class="text-uppercase font-size-16 text-white-50">Usuarios</h5>
                          <h3 class="mb-3 text-white">{{ number_format($users) }}</h3>
                      </div>
                      <div class="mini-stat-icon">
                          <i class="fas fa-users icon"></i>
                      </div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-xl-3 col-md-6">
          <a href="{{route('admin.room.index')}}" class="card bg-primary mini-stat position-relative">
              <div class="card-body">
                  <div class="mini-stat-desc">
                      <h5 class="text-uppercase verti-label font-size-16 text-white-50">
                      </h5>
                      <div class="text-white">
                          <h5 class="text-uppercase font-size-16 text-white-50">Habitaciones</h5>
                          <h3 class="mb-3 text-white">{{ number_format($rooms) }}</h3>
                      </div>
                      <div class="mini-stat-icon">
                        <i class="fas fa-hotel icon"></i>
                      </div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-xl-3 col-md-6">
          <a href="{{route('admin.events.index')}}" class="card bg-primary mini-stat position-relative">
              <div class="card-body">
                  <div class="mini-stat-desc">
                      <div class="text-white">
                          <h5 class="text-uppercase font-size-16 text-white-50">Eventos
                          </h5>
                          <h3 class="mb-3 text-white">{{ number_format($events) }}</h3>
                      </div>
                      <div class="mini-stat-icon">
                        <i class="fas fa-calendar-check icon"></i>
                      </div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-xl-3 col-md-6">
          <a href="{{ route('admin.subscriptions.index') }}" class="card bg-primary mini-stat position-relative">
              <div class="card-body">
                  <div class="mini-stat-desc">
                      <div class="text-white">
                          <h5 class="text-uppercase font-size-16 text-white-50">Suscripciones
                          </h5>
                          <h3 class="mb-3 text-white">{{ number_format($testimonial) }}</h3>
                      </div>
                      <div class="mini-stat-icon">
                        <i class="fas fa-envelope icon"></i>
                      </div>
                  </div>
              </div>
          </a>
      </div>
    </div>

    <div class="card">
      <div class="col-lg-12">
        <div class="card-body">
          <div class="card-title card-title-with-button">
            <h5 class="text-primary">ESTADISTICAS DE SUSCRIPCIONES</h5>
          </div>
          <form class="mb-4" id="form-search" action="{{ route('dashboard.index') }}" method="GET" >
            @method('GET')
            @csrf
            <div class="row align-items-end">
              <div class="col-sm-12 col-md-3">
                <div class="form-group">
                  <label for="search-name" class="mb-0">Fecha Inicio</label>
                  <i class="fas fa-question-circle" title="Presione la tecla ENTER para buscar."></i>
                  <input type="date" class="form-control date" name="start_date" id="start_date" value="{{ \Carbon\Carbon::parse($from)->format('Y-m-d') }}">
                </div>
              </div>
              <div class="col-sm-12 col-md-3">
                <div class="form-group">
                  <label for="search-name" class="mb-0">Fecha Fin </label>
                  <i class="fas fa-question-circle" title="Presione la tecla ENTER para buscar."></i>
                  <input type="date" class="form-control date" name="end_date" id="end_date" value="{{ \Carbon\Carbon::parse($to)->format('Y-m-d') }}">
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    Filtrar
                  </button>
                </div>
              </div>
            </div>
          </form>
          <canvas id="myChart" class="col-12"></canvas>
        </div>
      </div>
      <input type="hidden" id="suscriptions" value="{{ $subscriptions }}">
    </div>

</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js">
</script>
<script>
    const getValue = nameId => document.getElementById(nameId).value
    const URL = "{{ route('dashboard.index') }}"
    const DATA = JSON.parse(document.getElementById('suscriptions').value)
    const dates = Object.keys(DATA).map((item) => item)
    const data = Object.values(DATA).map((item) => item.length)
    const $form = document.getElementById('form-search')

    document.getElementById('form-search').addEventListener('submit', function (e) {
      e.preventDefault();
      const params = new URLSearchParams({
        start_date: getValue('start_date'),
        end_date: getValue('end_date')
      }).toString()
      window.location.href = URL +'?'+ params
    })
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        // labels: ['monkda','dadada'],
        data: {
            labels: dates,
            datasets: [{
                label: 'Fechas de suscripcion',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'

                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom',
                    // label: "Fechas de suscripcion",
                    title: {
                        display: true,
                        // text: 'Monkys',
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        backdropColor: 'blue',
                    }
                }
            }
        }
    });
  </script>
@endsection
