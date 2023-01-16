@extends('layouts.plantilla')

@section('contenido')
<div class="container">

    <form method="POST" action="{{route('inscripcion.update',$inscripcion->id_detalle)}}">
    @method('put')   
    @csrf

         <div class="form-group">
           <div class="col-auto">
             <label>Codigo: </label>
           </div>
           <div class="col-auto">
             <input disabled class="form-control" type="text" id="id" name="id" value="{{$inscripcion->id_detalle}}"/>
           </div>
           
        </div>

        <div class="form-group">
            <label>Seleccione al ex-alumno:</label> <br>
            <select value="{{$inscripcion->idalumno}}" required name="idalumno" id="idalumno" class="form-control" >
                @foreach ($alumno as $itemalumno)
            <option value="{{$itemalumno['idalumno']}}">{{$itemalumno['apellidos']}} {{$itemalumno['nombres']}} </option>
               @endforeach
            </select>
            <br>
        </div>

        <div class="form-group">
            <label>Seleccione el cargo:</label> <br>
            <select required value="{{$inscripcion->idevento}}"  onclick="setmonto()" name="idevento" id="idevento" class="form-control" >
                @foreach ($evento as $itemevento)
            <option value="{{$itemevento['idevento']}}">{{$itemevento['nombre']}} </option>
               @endforeach
            </select>
            <br>
        </div>

        
        <div class="row g-3 align-items-center">
               <div class="col-auto">
                <label>Fecha de inscripcion:</label>
               </div> 
               <div class="col-auto">
                  <input  required class="form-control @error('fechains') is-invalid @enderror" type="date"
                         id="fechains" name="fechains" value="{{$inscripcion->fechains}}" />
                    @error('fechains')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
               </div>
                <br>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label>Cantidad de entradas a adquirir:</label>
            </div>    
            <div class="col-auto">
                    <input  value="{{$inscripcion->cant_entradas}}" required class="form-control @error('monto') is-invalid @enderror" type="number"
                         id="cant_entradas" name="cant_entradas" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   />
                    @error('cant_entradas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>  
                    <br>
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

        function setmonto(){
            let cargos = document.getElementById('idcargo');
            let vcargo = cargos.value;

            if(document.getElementById('idcargo').value==1){
                document.getElementById('monto').value= 30;
            }else{
                if(document.getElementById('idcargo').value==2){
                    document.getElementById('monto').value= 20;
                }else{
                    if(document.getElementById('idcargo').value==3){
                        document.getElementById('monto').value= 20;
                    }else{
                        if(document.getElementById('idcargo').value==4){
                        document.getElementById('monto').value= 25;
                        }else{
                            if(document.getElementById('idcargo').value==5){
                                document.getElementById('monto').value= 35;
                            }else{
                                if(document.getElementById('idcargo').value==6){
                                  document.getElementById('monto').value= 28;
                                }else{
                                    
                                }
                           }
                        }
                    }
                }
            }
            
        }
    </script>

</div>
@endsection