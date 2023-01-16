@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <h2 align="center">Editar registro</h2> <br>

    <h3>Datos actuales:</h3> 
    <form method="POST" action="{{route('exalumno.update',$exalumno->idalumno)}}">
        @method('put')
        @csrf
        <div class="row g-3 align-items-center">
           <div class="col-auto">
             <label>Codigo: </label>
           </div>
           <div class="col-auto">
             <input disabled class="form-control" type="text" id="id" name="id" value="{{$exalumno->idalumno}}"/>
           </div>
           
        </div>

 
        <br> <br>
        <h3>Datos nuevos:</h3> 

        <div class="row g-3 align-items-center">
            <div class="col-auto">
            <label>Reescriba el DNI:</label>
            </div>    
            <div class="col-auto">
                 <input class="form-control @error('dni') is-invalid @enderror" type="text"
                    value="{{$exalumno->dni}}"     id="dni" name="dni" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  />
                    @error('dni')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>  
                
                   
                    <br>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label>Reescriba el nombre del ex alumno:</label>
            </div>    
            <div class="col-auto">
            <input class="form-control @error('nombres') is-invalid @enderror" type="text"
           value="{{$exalumno->nombres}}"     id="nombres" name="nombres"  />
            @error('nombres')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
            </div>  
               
            <br>
        </div>
        <div class="row g-3 align-items-center">

             <div class="col-auto">
                <label>Reescriba los apellidos del ex alumno:</label>
            </div>    
            <div class="col-auto">
                <input class="form-control @error('apellidos') is-invalid @enderror" type="text"
                     value="{{$exalumno->apellidos}}"    id="apellidos" name="apellidos"  />
                    @error('apellidos')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
             </div>  
                
                    
                    <br>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label>Reescriba la edad del ex alumno:</label>
            </div>    
            <div class="col-auto">
                    <input class="form-control @error('edad') is-invalid @enderror" type="text"
                      value="{{$exalumno->edad}}"   id="edad" name="edad" maxlength="2" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                    @error('edad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>  
                    <br>
        </div>
        <div class="row g-3 align-items-center">
               <div class="col-auto">
                <label>Reescriba la fecha de nacimiento:</label>
               </div> 
               <div class="col-auto">
                  <input class="form-control @error('fechaN') is-invalid @enderror" type="date"
                      value="{{$exalumno->fechaN}}"   id="fechaN" name="fechaN"  />
                    @error('fechaN')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
               </div>
                <br>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label>Reescriba el telefono:</label>
            </div>    
            <div class="col-auto">
                    <input class="form-control @error('telefono') is-invalid @enderror" type="text"
                      value="{{$exalumno->telefono}}"   id="telefono" name="telefono" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>  
                    <br>
        </div>

       

        
        <div class="row g-3 align-items-center">
        <div class="col-auto">
                <label>¿Tiene estudios superiores? Seleccione su opcion:</label>
               </div> 
            <div class="form-check">
                <input class="form-check-input" value="Si" type="radio" name="superiores"
                 id="superiores" value="{{$exalumno->superiores}}" onclick="document.getElementById('idEscuela').disabled=false
                                          document.getElementById('idFacultad').disabled=false
                                          document.getElementById('oficio').disabled=true  " />
                <label class="form-check-label" for="superiores">
                   Si
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="No" type="radio" name="superiores"
                 id="superiores" value="{{$exalumno->superiores}}" onclick="document.getElementById('idEscuela').disabled=true
                                          document.getElementById('idFacultad').disabled=true
                                          document.getElementById('oficio').disabled=false  ">
                <label class="form-check-label" for="superiores">
                    No
                </label>
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label>Oficio:</label>
            </div>    
            <div class="col-auto">
                    <input disabled class="form-control @error('oficio') is-invalid @enderror" type="text"
                         id="oficio" value="{{$exalumno->oficio}}" name="oficio" maxlength="20"  />
                    @error('oficio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>  
                    <br>
        </div>

        <div class="form-group">
            <label>Vuelva a escoger la escuela:</label> <br>
            <select value="{{$exalumno->idEscuela}}" disabled name="idEscuela" id="idEscuela" class="form-control">
                @foreach ($escuela as $itemescuela)
            <option value="{{$itemescuela['idEscuela']}}">{{$itemescuela['nombreEs']}} </option>
               @endforeach
            </select>
            <br>
        </div>

        <div class="form-group">
            <label>Vuelva a escoger la facultad:</label> <br>
            <select disabled value="{{$exalumno->idFacultad}}" name="idFacultad" id="idFacultad" class="form-control">
                @foreach ($facultad as $itemfacultad)
            <option value="{{$itemfacultad['idFacultad']}}">{{$itemfacultad['nombreFa']}} </option>
               @endforeach
            </select>
            <br>
        </div>


        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Actualizar</button>
        <a href="{{route('cancelar')}}" class="btn btn-danger"> <i class="fas fa-ban"></i> Cancelar</a>
    </form>
</div>
@endsection