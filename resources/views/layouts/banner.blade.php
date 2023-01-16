@extends('layouts.plantilla')

@section('contenido')
<div class="container-fluid">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
 
 
    <div class="carousel-item active">
      <img src="/img/c4.jpg" class="d-block w-100" alt="...">
      <div  class="carousel-caption d-none d-md-block">
      <h5 >UNIVERSIDAD NACIONAL DE TRUJILLO</h5>
        <p>Escuela de Ingenieria de Sistemas</p>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/c2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>TODOS PARTICIPAN EN LOS DEPORTES</h5>
        <p>En los campeonatos de futbol y voley participan todas las promociones.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/c1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5 align="left">REGISTRA A LOS EX-ALUMNOS EN LOS EVENTOS</h5>
        <p align="left">Puedes crear eventos e inscribir a ex-alumnos para que puedan participar.</p>
      </div>
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
@endsection