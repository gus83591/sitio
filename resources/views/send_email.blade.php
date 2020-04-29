@extends('layout')
@section('titulo')
Formulario de Contacto| Caorsi C&C 
@endsection

@section('container')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center display-3">Formulario de Contacto</h1>
        </div>
      </div>
    </div>
  </div>
  
<div class="container box">

    @if (count($errors) > 0)
     <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <ul>
       @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
       @endforeach
      </ul>
     </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
     <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    @endif
    <form method="post" action="{{url('sendemail/send')}}">
     {{ csrf_field() }}
     <div class="form-group">
      <label>Nombre</label>
      <input type="text" name="name" class="form-control" value="" />
     </div>
     <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value="" />
     </div>
     <div class="form-group">
      <label>Mensaje</label>
      <textarea name="message" class="form-control"></textarea>
     </div>
     <div class="form-group">
      <input type="submit" name="send" class="bbtn btn-primary btn-lg btn-block" value="Envia email de contacto" />
     </div>
    </form>

   </div>
@endsection
