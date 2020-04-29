@extends('layout')
@section('titulo')
Contacto| Caorsi C&C 
@endsection
@section('container')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">Estamos enfocados en hacer conocer GeneXus en Andalucia (España) y Gibraltar, ademas ofrecemos servicios de consultoría y desarrollo de software especializada en tecnologías GeneXus.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center align-self-center">
          <p class="mb-5 text-dark"> <strong>Caorsi C&amp;C SL.</strong>
            <br>Guadiaro Sotogrande
            <br>Cadiz, España
            <br> <i class="fa d-inline mr-3 text-dark fa-phone"></i> +34 611 288 766
            <br>
            <a href="{{url('sendemail')}}" class="text-dark"> <i class="fa d-inline mr-3 fa-envelope-o text-dark"></i> g.caorsi@genexus.es </a>
          </p>
          <div class="my-3 row">
            <div class="col-6">
              <a href="https://www.linkedin.com/groups/8411019" target="_blank"><i class="fa fa-3x fa-linkedin"></i></a>
            </div>
            <div class="col-6">
              <a href={{url('sendemail')}} target="_blank"><i class="fa fa-3x fa-envelope-o"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-0">
          <img class="img-fluid" src="images/Estepona_Genexus.png"> </div>
      </div>
    </div>
  </div>


@endsection
