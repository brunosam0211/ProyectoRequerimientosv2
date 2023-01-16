@extends('layouts.plantilla')

@section('contenido')

<div class="row">
  <div class="col-12" align="center">
    <a href="{{route('detalle.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Nueva asignacion</a>
<br>
  </div>
</div>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex"  method="GET">
          <input name="buscarpor" value="{{$buscarpor}}" class="form-control me-2" type="search" placeholder="Buscar por ID de cargo" aria-label="Search">
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
        <th scope="col">Cargo</th>
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
        
        <td align="center">{{$itemdetalle->id_detalle}}</td>
        <td align="center">{{$itemdetalle->alumno->nombres}} {{$itemdetalle->alumno->apellidos}}</td>
        <td align="center"> ID{{$itemdetalle->cargo->idcargo}} - {{$itemdetalle->cargo->descripcion}}</td>
        <td align="center">{{$itemdetalle->fechains}}</td>
        <td align="center">s/ {{$itemdetalle->monto}}</td>
        <td align="center">
           <a href="{{route('detalle.edit',$itemdetalle->id_detalle)}}" class="btn btn-info btn-sm" > <i class="fas fa-edit"></i>Editar </a>
           <a href="{{route('detalle.confirmar',$itemdetalle->id_detalle)}}" class="btn btn-danger btn-sm" > <i class="fas fa-trash"></i>Eliminar </a> </td>
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