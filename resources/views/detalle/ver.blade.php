@extends('layouts.plantilla')

@section('contenido')

<div class="row">
    <div class="col-12" align="center">
    <a target="_blank" href="{{route('cargo.pdf')}}" class="btn btn-primary" align="center"> <i class="fas fa-plus"></i> GENERAR PDF</a>

    </div>
</div>
<br>
<div class="accordion accordion-flush" id="accordionExample" >
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Abrir panel de busqueda
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <nav class="navbar navbar-expand-lg bg-light "  align="right">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex"  method="GET">
          <input  value="{{$buscarpor}}" name="buscarpor" class="form-control me-2" type="search" placeholder="ID de ex-alumno" aria-label="Search">
          <button class="btn btn-success" type="submit">DNI</button>
        </form>
      </div>
    </div>
    <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex"  method="GET">
              <input  value="{{$buscarpor1}}" name="buscarpor1" class="form-control me-2" type="search" placeholder="ID de cargo" aria-label="Search">
              <button class="btn btn-success" type="submit">Evento</button>
            </form>
          </div>
        </div>
   
         </nav>
      </div>
    </div>
  </div>

</div>

  @if(session('datos'))
  <div id="mensaje">
    <div class="alert alert-warning alert-dissmissible fade show mt-3" role="alert">
        {{session('datos')}}
        <button type="button" class="close" data-dissmiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  </div>
  @endif
  <table class="table table-dark">
    <thead>
      <tr align="left">
        <th scope="col">ID</th>
        <th scope="col">(#ID )Ex-alumno</th>
        <th scope="col">(#ID) Cargo</th>
        <th scope="col">Fecha de inscripcion</th>
        <th scope="col">Monto</th>
        <th scope="col">Opciones</th>
        
      </tr>
    </thead>
    <tbody>
      @if (count($detalle)<=0)
          <tr>
            <td colspan="3"> Aun no se asignan cargos</td>
          </tr>
      @else
        @foreach($detalle as $itemdetalle)
        <tr >
        
        <td align="left">{{$itemdetalle->id_detalle}}</td>
        <td align="left">#{{$itemdetalle->alumno->idalumno}}. {{$itemdetalle->alumno->nombres}} {{$itemdetalle->alumno->apellidos}}</td>
        <td align="left">#{{$itemdetalle->cargo->idcargo}}. {{$itemdetalle->cargo->descripcion}}</td>
        <td align="left">{{$itemdetalle->fechains}}</td>
        <td align="left">s/ {{$itemdetalle->monto}}</td>
        <td align="left">
        <a target="_blank" href="{{route('cargo.boleta',$itemdetalle->id_detalle)}}" class="btn btn-info btn-sm" ></i>Generar PDF </a>
          </td>
        </tr>
      @endforeach
      @endif
    </tbody>
  </table>
  {{$detalle->links()}}
@endsection

@section('script')
     <script>
      setTimeout(function(){
        document.querySelector('#mensaje').remove();

      },2000);
     </script>
@endsection