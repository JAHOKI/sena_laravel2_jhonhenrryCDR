@extends('layouts.app')

@section('titulo', 'Detalle Proyecto')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($proyectoa->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">tipo: {{$proyectoa->tipo}}</p>
        <p class="card-text">cantidad: {{$proyectoa->cantidad}}</p>
    </div>
    <br>
    <a href="/cursos/{{$proyectoa->id}}/edit" class="btn btn-warning">Editar proyecto</a>
    {{-- <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark">Editar curso</a> --}}
</div>

@endsection
