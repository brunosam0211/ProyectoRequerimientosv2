@extends('layouts.plantilla')

@section('contenido')
<div class="row">
  <div class="col-12" align="center">
    <a href="{{route('evento.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Nuevo evento</a>
<br>
  </div>
</div>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex"  method="GET">
          <input name="buscarpor" value="{{$buscarpor}}" class="form-control me-2" type="search" placeholder="Busqueda por Nombre" aria-label="Search">
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
        <th scope="col">Codigo</th>
        <th scope="col">Nombre de evento</th>
        <th scope="col">Inicia el</th>
        <th scope="col">Termina en</th>
        <th scope="col">Costo por persona</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
      @if (count($evento)<=0)
          <tr>
            <td colspan="3"> No hay registros</td>
          </tr>
      @else
        @foreach($evento as $itemevento)
        <tr >
        
        <td align="center">{{$itemevento->idevento}}</td>
        <td align="center">{{$itemevento->nombre}}</td>
        <td align="center">{{$itemevento->fechaini}}</td>
        <td align="center">{{$itemevento->fechafin}}</td>
        <td align="center">s/ {{$itemevento->costoevento}}</td>
        <td align="center">
           <a href=" {{route('evento.edit',$itemevento->idevento)}}" class="btn btn-info btn-sm" > <i class="fas fa-edit"></i>Editar </a>
           <a href=" {{route('evento.confirmar',$itemevento->idevento)}}" class="btn btn-danger btn-sm" > <i class="fas fa-trash"></i>Eliminar </a> </td>

        </tr>
      @endforeach
      @endif
    </tbody>
  </table>
  {{$evento->links()}}
@endsection

@section('script')
     <script>
      setTimeout(function(){
        document.querySelector('#mensaje').remove();

      },2000);
     </script>
@endsection