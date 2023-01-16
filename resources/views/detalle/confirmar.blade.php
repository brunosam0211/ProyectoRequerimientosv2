@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <h2>¿Desea eliminar esta asignacion?</h2>
    <br>
     Codigo de registro:# {{$detalle->idalumno}} 
    <br>
    Nombres y apellidos:  {{$detalle->alumno->nombres}} {{$detalle->alumno->apellidos}}
    <br>
    Cargo asignado a la persona: {{$detalle->cargo->descripcion}}

    <br>
    <form method="POST" action="{{route('detalle.destroy',$detalle->id_detalle)}}">
        @method ('delete')
        @csrf
        <br>
        <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> Si</button>
        <a href="{{route('cancelar2')}}" class="btn btn-primary"> <i class="fas fa-times-circle"></i> Cancelar</a>
    </form>
</div>
@endsection