<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-page">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="{{asset('assets/img/logo-footer.png')}}" alt="" title="" border="0" height="50" class="img-sidebar"/>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::path() == 'inicio' ? 'active' : '';}}"><a href="{{ URL::to('inicio') }}">PRINCIPAL</a></li>
            <li class="{{Request::path() == 'frontend/labiblioteca' ? 'active' : '';}}"><a href="{{ URL::to('frontend/labiblioteca') }}">LA BIBLIOTECA</a></li>
            <li class="{{Request::path() == 'frontend/talleres' ? 'active' : '';}}"><a href="{{ URL::to('frontend/talleres') }}">TALLERES</a></li>
            <li class="{{Request::path() == 'frontend/actividades' ? 'active' : '';}}"><a href="{{ URL::to('frontend/actividades') }}">ACTIVIDADES</a></li>
            <li class="{{Request::path() == 'frontend/noticias' ? 'active' : '';}}"><a href="{{ URL::to('frontend/noticias') }}">NOTICIAS</a></li>
            <li class="{{Request::path() == 'frontend/multimedia' ? 'active' : '';}}"><a href="{{ URL::to('frontend/multimedia') }}">GALERIA</a></li>
            <li class="{{Request::path() == 'frontend/contactos' ? 'active' : '';}}"><a href="{{ URL::to('frontend/contactos') }}">CONTACTOS</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>