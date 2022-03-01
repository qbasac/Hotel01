<div id="sidebar-menu">
  <ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title text-uppercase">INICIO</li>
    <li>
      <a href="{{ route('dashboard.index') }}" class="waves-effect">
        <i class="fas fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="menu-title text-uppercase">ADMINISTRAR</li>
    <li>
      <a href="{{ route('usuario.index') }}" class="waves-effect">
        <i class="fas fa-users"></i>
        <span>Usuarios</span>
      </a>
    </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
          </a>
          <ul class="sub-menu" aria-expanded="true">
            <li><a href="{{route('admin.home-slider.index')}}">Carrucel de imagenes </a></li>
            <li><a href="{{route('admin.home-offers.index')}}">Sección ofertas especiales</a></li>
            <li><a href="{{route('testimonial.index')}}">Sección nuestros servicios</a></li>
            <li><a href="{{route('testimonial.index')}}">Sección nuestras habitaciones</a></li>
            <li><a href="{{route('testimonial.index')}}">Sección nuestra galeria</a></li>
            <li><a href="{{route('testimonial.index')}}">Sección nuestro blog</a></li>
            <li><a href="{{route('testimonial.index')}}">Sección nuestros precios</a></li>
      </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
          <i class="fas fa-address-card"></i>
          <span>Sobre Nosotros</span>
        </a>
        <ul class="sub-menu" aria-expanded="true">
          <li><a href="{{route('about.index')}}">Sección Sobre Nosotros</a></li>
          <li><a href="{{route('testimonial.index')}}">Sección testimonios</a></li>
       </ul>
    </li>

    <li>
      <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="fas fa-hotel"></i>
        <span>Habitaciones</span>
      </a>
      <ul class="sub-menu" aria-expanded="true">
        <li><a href="{{route('admin.room.index')}}">Nuestras habitaciones</a></li>
        <li><a href="{{route('room-reservation.index')}}">Reserva de habitaciones</a></li>
      </ul>
    </li>
    <li>
      <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="mdi mdi-file-tree"></i>
        <span>Multi Level</span>
      </a>
      <ul class="sub-menu" aria-expanded="true">
        <li><a href="javascript: void(0);">Level 1.1</a></li>
        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
          <ul class="sub-menu" aria-expanded="true">
            <li><a href="javascript: void(0);">Level 2.1</a></li>
            <li><a href="javascript: void(0);">Level 2.2</a></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>
