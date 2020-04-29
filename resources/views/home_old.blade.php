@extends('layout')
@section('titulo')
GeneXus Sub Distributor | Caorsi C&C 
@endsection

@section('container')

<div class="py-5 text-center opaque-overlay" style="background-image: url(&quot;https://www.caorsicc.eu/images/estepona.jpg&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 text-white">
          <h1 class="display-3 mb-4">GeneXus Sub Distributor</h1>
        <h2 class="">Andalucia (España) Y Gibraltar</h2>
          <p class="lead mb-5">Nuestro objetivo es ayudar a las empresas a ser más eficientes en el desarrollo de software, dándoles la oportunidad de cabalgar la onda del cambio tecnológico sin perder el foco en los objetivos de la empresa. </p>
          <a href="http://get.genexus.com/GeneXusTrial.exe"
            class="btn btn-lg mx-1 btn-secondary">Prueba GeneXus Gratis!</a>
          <a href="{{url('sendemail')}}" class="btn btn-lg btn-primary mx-1">Contáctanos</a>
          <br>
        </div>
      </div>
    </div>
  </div>

  @endsection
