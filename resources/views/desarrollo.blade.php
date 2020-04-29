@extends('layout')
@section('titulo')
Desarrollo Software | Caorsi C&C 
@endsection

@section('container')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center display-3">Desarrollo Software</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="pb-4 text-secondary">Aplicaciones Web y Apps móviles a su medida</h2>
          <p class="lead">Diseño y desarrollo de aplicaciones Web, Web Responsive y para dispositivos móviles nativas en iOS y Android creadas a medida para los requisitos de su producto </p>
        </div>
      </div>
      <div class="row">
        <div class="align-self-center text-md-right text-center col-md-4">
          <h3 class="text-primary">Responsive design</h3>
          <p class="mb-5">Desarrollamos aplicaciones nativas para iOS o Android y aplicaciones web responsivas que se adaptan a todos los dispositivos</p>
          <h3 class="text-primary">Aplicaciones Online y Offline</h3>
          <p class="mb-5">Desarrollo de aplicaciones que puedan ejecutarse sin conexión</p>
        </div>
        <div class="my-3 col-md-4">
          <img class="img-fluid d-block ml-1 mx-auto" src="{{ asset('images/iphone_examples.png') }}"> </div>
        <div class="align-self-center text-md-left text-center col-md-4">
          <h3 class="text-primary">Desarrollo sofware a medida SAP</h3>
          <p class="mb-5">Desarrollo sofware a medida personalizado para la comunicación entre distintas aplicaciones, por ejemplo con SAP ERP</p>
          <h3 class="text-primary">Integración de sistemas</h3>
          <p class="mb-5">Desarrollo de aplicaciones a medida integradas con los sistemas existentes del cliente</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="row">
      <div class="col-md-12"> </div>
    </div>
  </div>
  
@endsection

