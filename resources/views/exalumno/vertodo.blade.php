@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-12" align="center">
    <a target="_blank" href="{{route('exalumno.pdf')}}" class="btn btn-primary" align="center"> <i class="fas fa-plus"></i> GENERAR PDF</a>
<br>
    </div>
</div>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex"  method="GET">
          <input name="buscarpor" value="{{$buscarpor}}" class="form-control me-2" type="search" placeholder="Busqueda por DNI" aria-label="Search">
          <button class="btn btn-success" type="submit">Buscar</button>
        </form>
        <br>
      </div>
    </div>
  </nav>
  <table class="table table-dark">
    <thead>
      <tr align="center">
        <th scope="col">DNI</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Edad</th>
        <th scope="col">F. de Nac</th>
        <th scope="col">Telefono</th>
        <th scope="col">Ocupacion</th>
     
      </tr>
    </thead>
    <tbody>
      @if (count($exalumno)<=0)
          <tr>
            <td colspan="3"> No hay registros</td>
          </tr>
      @else
        @foreach($exalumno as $itemexalumno)
        <tr >
        
        <td align="center">{{$itemexalumno->dni}}</td>
        <td align="center">{{$itemexalumno->nombres}}</td>
        <td align="center">{{$itemexalumno->apellidos}}</td>
        <td align="center">{{$itemexalumno->edad}}</td>
        <td align="center">{{$itemexalumno->fechaN}}</td>
        <td align="center">{{$itemexalumno->telefono}}</td>
        @if (($itemexalumno->superiores)=="Si")
        <td align="center"> {{$itemexalumno->escuela->nombreEs}}</td>
        @else
        <td align="center"> {{$itemexalumno->oficio}}</td>
        @endif
     
        </tr>
        
      @endforeach
      @endif
    </tbody>
  </table>
  {{$exalumno->links()}}
@endsection

@section('script')
     <script>
      setTimeout(function(){
        document.querySelector('#mensaje').remove();

      },2000);
     </script>
@endsection