@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <h2>¿Desea eliminar registro?</h2>
   
    <form method="POST" action="{{route('exalumno.destroy',$exalumno->idalumno)}}">
        @method ('delete')
        @csrf
        <br>
        <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> Si</button>
        <a href="{{route('cancelar')}}" class="btn btn-primary"> <i class="fas fa-times-circle"></i> Cancelar</a>
    </form>
</div>
@endsection