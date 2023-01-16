@extends('layouts.plantilla')

@section('contenido')

<h3 align="center"> CARGOS DISPONIBLES</h3>



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
        <th scope="col">Descripcion</th>

      </tr>
    </thead>
    <tbody>
      @if (count($cargo)<=0)
          <tr>
            <td colspan="3"> No hay registros</td>
          </tr>
      @else
        @foreach($cargo as $itemcargo)
        <tr >
        
        <td align="center">{{$itemcargo->idcargo}}</td>
        <td align="center">{{$itemcargo->descripcion}}</td>

        </tr>
      @endforeach
      @endif
    </tbody>
  </table>
  {{$cargo->links()}}
@endsection

@section('script')
     <script>
      setTimeout(function(){
        document.querySelector('#mensaje').remove();

      },2000);
     </script>
@endsection