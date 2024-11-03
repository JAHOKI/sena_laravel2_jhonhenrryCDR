@extends('layouts.app')

@section('contenido') <!-- Aquí se define el nombre de la sección -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"> <!-- Añadido data-bs-ride para que el carrusel funcione -->
 <div class="carousel-indicators">
 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide1"></button>
 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide2"></button>
 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide3"></button>
 </div>
 <div class="carousel-inner">
 <div class="carousel-item active">
 <img src="{{ asset('images/GALLO.png') }}" class="d-block w-25 mx-auto" alt="">
 </div>
 <div class="carousel-item">
 <img src="{{ asset('images/gallina.png') }}" class="d-block w-25 mx-auto" alt="...">
 </div>
 <div class="carousel-item">
 <img src="{{ asset('images/CERDO.png') }}" class="d-block w-25 mx-auto" alt="...">
 </div>
 </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Previous</span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Next</span>
 </button>
</div>

<!-- Sección de Información de Interés -->
<section class="info-section">
 <div class="container">
 <h2 class="text-center mb-5">Información de Interés</h2>
 <div class="row">
 <!-- Noticias -->
 <div class="col-md-4">
 <div class="info-card">
 <img src="{{ asset('images/granja.png') }}" alt="Noticias" class="img-fluid">
 <div class="info-card-body">
 <h5 class="info-card-title">Noticias</h5>
 <p class="info-card-text">Mantente informado con las últimas noticias sobre nuestras actividades y eventos.</p>
 <a href="#" class="btn btn-primary">Leer más</a>
 </div>
 </div>
 </div>

 <!-- Matrículas -->
 <div class="col-md-4">
 <div class="info-card">
 <img src="{{ asset('images/matricula.png') }}" alt="Matrículas" class="img-fluid">
 <div class="info-card-body">
 <h5 class="info-card-title">Matrículas</h5>
 <p class="info-card-text">Infórmate sobre el proceso de matrículas y cómo inscribirte en nuestros programas educativos.</p>
 <a href="#" class="btn btn-primary">Leer más</a>
 </div>
 </div>
 </div>

 <!-- Proyectos Agropecuarios -->
 <div class="col-md-4">
 <div class="info-card">
 <img src="{{ asset('images/colegio.png') }}" alt="Proyectos Agropecuarios" class="img-fluid">
 <div class="info-card-body">
 <h5 class="info-card-title">Proyectos Agropecuarios</h5>
 <p class="info-card-text">Descubre los proyectos agropecuarios en los que nuestros estudiantes participan activamente.</p>
 <a href="#" class="btn btn-primary">Leer más</a>
 </div>
 </div>
 </div>
 </div>
 </div>
</section>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection

