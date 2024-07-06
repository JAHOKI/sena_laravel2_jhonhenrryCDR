@extends('layouts.app')

@section('titulo', 'Listado de proyectos')

@section('contenido')

<br>
<h3 class="text-center">Listado de proyectos productivos</h3>
<br>
<div class="row">
    @foreach ($proyectoa as $proyectob)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($proyectob->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $proyectob->nombre }}</h5>
                  <p class="card-text">{{ $proyectob->tipo }}</p>
                  <p class="card-text">{{ $proyectob->valor }}</p>
                  <a href="/proyectos/{{$proyectob->id}}" class="btn btn-success">detalles del proyecto</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection
