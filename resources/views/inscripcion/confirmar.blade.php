@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <h2>¿Desea eliminar registro?</h2>

    <br>
    <form method="POST" action="{{route('inscripcion.destroy',$inscripcion->idevento)}}">
        @method ('delete')
        @csrf
        <br>
        <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> Si</button>
        <a href="{{route('cancelar4')}}" class="btn btn-primary"> <i class="fas fa-times-circle"></i> Cancelar</a>
    </form>
</div>
@endsection