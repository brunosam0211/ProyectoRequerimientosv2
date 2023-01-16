@extends('layouts.plantilla')

@section('contenido')
<div class="container">

    <form method="POST" action="{{route('inscripcion.store')}}">
        @csrf 
        <div class="row">
        <div class="form-group col-12 col-lg-6">
            <label>Seleccione al ex-alumno:</label> <br>
            <select required name="idalumno" id="idalumno" class="form-control" >
                @foreach ($alumno as $itemalumno)
            <option value="{{$itemalumno['idalumno']}}">{{$itemalumno['apellidos']}} {{$itemalumno['nombres']}} </option>
               @endforeach
            </select>
            <br>
        </div>

        <div class="form-group  col-12 col-lg-6">
            <label>Seleccione el evento:</label> <br>
            <select required  name="idevento" id="idcaideventorgo" class="form-control" >
                @foreach ($evento as $itemevento)
            <option value="{{$itemevento['idevento']}}">{{$itemevento['nombre']}} </option>
               @endforeach
            </select>
            <br>
        </div>

        
        <div class="form-group  col-12 col-lg-6">
               <div class="col-auto">
                <label>Fecha de inscripcion:</label>
               </div> 
               <div class="col-auto">
                  <input required class="form-control @error('fechains') is-invalid @enderror" type="date"
                         id="fechains" name="fechains"  />
                    @error('fechains')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
               </div>
                <br>
        </div>
        <div class="form-group  col-12 col-lg-6">
            <div class="col-auto">
                <label>Cantidad de entradas a adquirir:</label>
            </div>    
            <div class="col-auto">
                    <input required class="form-control @error('cant_entradas') is-invalid @enderror" type="number"
                         id="cant_entradas" name="cant_entradas" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   />
                    @error('cant_entradas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>  
                    <br>
        </div>
       
     
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Grabar</button>
        <a href="{{route('cancelar4')}}" class="btn btn-danger"> <i class="fas fa-ban"></i> Cancelar</a>
    </form>

    <script>
        window.onload = function(){
                var fecha = new Date(); //Fecha actual
                var mes = fecha.getMonth()+1; //obteniendo mes
                var dia = fecha.getDate(); //obteniendo dia
                var ano = fecha.getFullYear(); //obteniendo año
                if(dia<10)
                    dia='0'+dia; //agrega cero si el menor de 10
                if(mes<10)
                    mes='0'+mes //agrega cero si el menor de 10
                document.getElementById('fechains').value=ano+"-"+mes+"-"+dia;
        }
    </script>

</div>
@endsection
