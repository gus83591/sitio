<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
  <meta name="description" content="Aplicaciones Web y Apps móviles a su medida">
  <title>@yield('titulo')</title>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/home"><i class="fa d-inline fa-lg fa-cloud"></i><b>  CAORSI C&amp;C SL</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item {{ ! Route::is('home') ?: 'active'}}">
            <a class="nav-link" href="{{ route('home') }}">Home </a>
          </li>
          <li class="nav-item {{ ! Route::is('preguntas') ?: 'active'}}">
            <a class="nav-link" href="{{ route('preguntas') }}"><i class="fa d-inline fa-lg fa-magic"></i> GeneXus</a>
          </li>
          <li class="nav-item {{ ! Route::is('productos') ?: 'active'}}">
            <a class="nav-link" href="{{ route('productos') }}"><i class="fa d-inline fa-lg fa-product-hunt"></i> Productos</a>
          </li>
          <li class="nav-item {{ ! Route::is('desarrollo') ?: 'active'}}">
            <a class="nav-link" href="{{ route('desarrollo') }}"><i class="fa d-inline fa-lg fa-asterisk"></i> Desarrollo Software</a>
          </li>
          <li class="nav-item {{ ! Route::is('consultoria') ?: 'active'}}">
            <a class="nav-link" href="{{ route('consultoria') }}"><i class="fa d-inline fa-lg fa-asterisk"></i> Consultoria</a>
          </li>
          <li class="nav-item {{ ! Route::is('novedades') ?: 'active'}}">
            <a class="nav-link" href="{{ route('novedades') }}"><i class="fa d-inline fa-lg fa-bookmark-o"></i> Novedades</a>
          </li>
          <li class="nav-item{{ ! Route::is('contacto') ?: 'active'}}">
            <a class="nav-link" href="{{ route('contacto') }}"><i class="fa d-inline fa-lg fa-envelope-o"></i> Contacto</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

  @yield('container')

  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Caorsi C&amp;C SL</h2>
          <p class="text-white">Sub Distribuidor GeneXus para España y Gibraltar.</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Mapa</h2>
          <ul class="list-unstyled">
            <a href="{{ route('home') }}" class="text-white">Home</a>
            <br>
            <a href="{{ route('productos') }}" class="text-white">Productos</a>
            <br>
            <a href="{{ route('preguntas') }}" class="text-white">GeneXus</a>
            <br>
            <a href="{{ route('desarrollo') }}" class="text-white">Desarrollo Software</a>
            <br>
            <a href="{{ route('consultoria') }}" class="text-white">Consultoria</a>
            <br>
            <a href="{{ route('novedades') }}" class="text-white">Novedades</a>
            <br>
            <a href="{{ route('contacto') }}" class="text-white">Contacto</a>
            <br>
            <a href="{{ route('software') }}" class="text-white">Apps</a>
            <br> </ul>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Contacto</h2>
          <p>
            <a href="tel:+34 - 611 288 766" class="text-white"><i class="fa d-inline mr-3 fa-phone text-white"></i>+34 611 288 766</a>
          </p>
          <p>
            <a href="{{url('sendemail')}}" class="text-white"><i class="fa d-inline mr-3 fa-envelope-o text-white"></i>g.caorsi@genexus.es</a>
          </p>
          <p>
            <a href="https://goo.gl/maps/2cVvvpcH1H22" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-white"></i>Guadiaro Sotogrande
              <br>Cadiz, España</a>
          </p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Social</h2>
          <a href="https://www.linkedin.com/groups/8411019" target="_blank" class="text-white"><i class="fa fa-linkedin d-inline fa-2x text-white"></i> GeneXus Europa</a>
          <h2 class="mb-4">Soporte</h2>
          <a href="https://anydesk.com" target="_blank" class="text-white"><i class="fa d-inline fa-2x text-white fa-ambulance"></i> Soporte Remoto</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2020 CAORSI C&amp;C SL - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <!-- Piwik -->
  <script type="text/javascript">
    var _paq = _paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//piwik.caorsicc.eu/";
      _paq.push(['setTrackerUrl', u+'piwik.php']);
      _paq.push(['setSiteId', '1']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Piwik Code -->
</body>

</html>
