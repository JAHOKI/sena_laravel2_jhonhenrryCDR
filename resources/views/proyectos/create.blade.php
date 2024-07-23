@extends('layouts.app')

@section('titulo', 'Crear proyecto')

@section('contenido')

<br>
    <h3>INGRESAR EL PROYECTO PRODUCTIVO</h3>
    <form action="/proyectos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="NOMBRE" class="form-label">NOMBRE</label>
          <input type="varchar" class="form-control" id="nombre" name="nombre">
        </div>

        <div class="mb-3">
            <label for="TIPO PROYECTO" class="form-label">TIPO DE PROYECTO</label>
            <input type="varchar" class="form-control" id="tipo" name="tipo">
          </div>

        <div class="mb-3">
            <label for="CANTIDAD" class="form-label">CANTIDAD</label>
            <input type="double" class="form-control" id="cantidad" name="cantidad">
        </div>

        <div class="mb-3">
            <label for="VALOR" class="form-label">VALOR</label>
            <input type="double" class="form-control" id="valor" name="valor">
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">FACTURA O SOPORTE</label>
        <br>
            <input type="file" id="imagen" name="imagen">

        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
<link rel="stylesheet" href="{{asset("css/app.css")}}">

@endsection
