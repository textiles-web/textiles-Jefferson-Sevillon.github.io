@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Datos Empresa</h2>

    <form action="/updateEmpresa/{{$edit->logo}}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        <input type="hidden" value="{{$edit->id}}" name="id">
        
        <div class="col-md-6 position-relative">
          <label for="correo" class="form-label">Correo</label>
          <input type="text" class="form-control" id="correo" value="{{$edit->correo}}" name="correo"  required>
        </div>

        <div class="col-md-6 position-relative">
          <label for="numero" class="form-label">Numero</label>
          <input type="text" class="form-control" id="numero" value="{{$edit->numero}}" name="numero" required>
        </div>
        <div class="col-md-12 position-relative">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" value="{{$edit->logo}}" name="logo" >
             <br>
             <img src="{{asset('imagen/'.$edit->logo)}}" class="img-thumbnail" alt="...">
        </div>

        <div class="col-md-12 position-relative">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" value="{{$edit->direccion}}" name="direccion" required>
          </div>

        <div class="col-md-12 position-relative">
            <label for="georefencia" class="form-label">Enlace Google Maps</label>
            <textarea name="georeferencia" class="form-control" id="georefencia">{{$edit->georeferencia}}</textarea>
        </div>

        <div class="container">
            <iframe src="{{$edit->georeferencia}}" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Actualizar</button>
        </div>
      </form>
</div>
   

@endsection