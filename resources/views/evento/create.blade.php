@extends('layouts.plantilla')

@section('contenido')
<div class="container">

    <form method="POST" action="{{route('evento.store')}}">
        @csrf

        <div class="row">
            <div class="form-group col-12">
            <div class="col-auto">
            <label>Nombre de evento:</label>
            </div>    
            <div class="col-auto">
                 <input class="form-control @error('nombre') is-invalid @enderror" type="text"
                         id="nombre" name="nombre" maxlength="30"  />
                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>  
                    <br>
            </div>

            <div class="form-group col-12 col-lg-4">
            <div class="col-auto">
                <label>Fecha de inicio:</label>
               </div> 
               <div class="col-auto">
                  <input class="form-control @error('fechaini') is-invalid @enderror" type="date"
                         id="fechaini" name="fechaini"  />
                    @error('fechaini')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
               </div>
                <br>
            </div>

            <div class="form-group col-12 col-lg-4">
            <div class="col-auto">
                <label>Fecha de fin:</label>
               </div> 
               <div class="col-auto">
                  <input class="form-control @error('fechafin') is-invalid @enderror" type="date"
                         id="fechafin" name="fechafin"  />
                    @error('fechafin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
               </div>
                <br>
            </div>

            <div class="form-group col-12 col-lg-4">
            <div class="col-auto">
                <label>Costo de evento:</label>
               </div> 
               <div class="col-auto">
                  <input class="form-control @error('costoevento') is-invalid @enderror" type="number"
                         id="costoevento" name="costoevento"  />
                    @error('costoevento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
               </div>
                <br>
            </div>
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Grabar</button>
        <a href="{{route('cancelar3')}}" class="btn btn-danger"> <i class="fas fa-ban"></i> Cancelar</a>
    </form>

</div>
@endsection
