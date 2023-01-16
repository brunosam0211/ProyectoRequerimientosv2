@extends('layouts.plantilla')

@section('contenido')

<div class="row">
  <div class="col-12" align="center">
    <a href="{{route('inscripcion.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Nueva inscripcion</a>
<br>
  </div>
</div>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex"  method="GET">
          <input name="buscarpor" value="{{$buscarpor}}" class="form-control me-2" type="search" placeholder="Busqueda por ID" aria-label="Search">
          <button class="btn btn-success" type="submit">Buscar</button>
        </form>
        <br>
      </div>
    </div>
  </nav>
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
      <tr align="center">
        <th scope="col">ID</th>
        <th scope="col">Ex-alumno</th>
        <th scope="col">Evento</th>
        <th scope="col">Fecha de inscripcion</th>
        <th scope="col">Cantidad de entradas</th>
        <th scope="col">Monto total</th>
        <th scope="col">Opciones</th>
        
      </tr>
    </thead>
    <tbody>
      @if (count($inscripcion)<=0)
          <tr>
            <td colspan="3"> Aun no hay inscripciones</td>
          </tr>
      @else
        @foreach($inscripcion as $iteminscripcion)
        <tr >
        
        <td align="center">{{$iteminscripcion->id_detalle}}</td>
        <td align="center">{{$iteminscripcion->alumno->nombres}} {{$iteminscripcion->alumno->apellidos}}</td>
        <td align="center">{{$iteminscripcion->evento->nombre}}</td>
        <td align="center">{{$iteminscripcion->fechains}}</td>
        <td align="center">{{$iteminscripcion->cant_entradas}}</td>
        <td align="center">s/ {{$iteminscripcion->montototal}}</td>
        <td align="center">
           <a href="{{route('inscripcion.edit',$iteminscripcion->id_detalle)}}" class="btn btn-info btn-sm" > <i class="fas fa-edit"></i>Editar </a>
           <a href="{{route('inscripcion.confirmar',$iteminscripcion->id_detalle)}}" class="btn btn-danger btn-sm" > <i class="fas fa-trash"></i>Eliminar </a> </td>
        </tr>
      @endforeach
      @endif
    </tbody>
  </table>
  {{$inscripcion->links()}}
@endsection

@section('script')
     <script>
      setTimeout(function(){
        document.querySelector('#mensaje').remove();

      },2000);
     </script>
@endsection