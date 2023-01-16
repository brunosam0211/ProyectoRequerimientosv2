@extends('layouts.plantilla')

@section('contenido')
<div class="container">

    <form method="POST" action="{{route('exalumno.store')}}">
        @csrf

        <div class="row">
        <div class="col-12">
            <h4 align="center"> DATOS PERSONALES</h4> <br>
        </div>
        <div class="form-group col-12 col-lg-4">
            <div class="col-auto">
            <label>DNI:</label>
            </div>    
            <div class="col-auto">
                 <input class="form-control @error('dni') is-invalid @enderror" type="text"
                      required   id="dni" name="dni" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  />
                    @error('dni')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>  
                    <br>
        </div>
        <div class="form-group col-12 col-lg-4">
            <div class="col-auto">
                <label>Nombre del ex alumno:</label>
            </div>    
            <div class="col-auto">
            <input class="form-control @error('nombres') is-invalid @enderror" type="text"
            required id="nombres" name="nombres"  maxlength="30"   />
            @error('nombres')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
            </div>  
               
            <br>
        </div>
        <div class="form-group col-12 col-lg-4">

             <div class="col-auto">
                <label>Apellidos del ex alumno:</label>
            </div>    
            <div class="col-auto">
                <input class="form-control @error('apellidos') is-invalid @enderror" type="text"
                required      id="apellidos" name="apellidos"  maxlength="30"  />
                    @error('apellidos')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
             </div>  
                
                    
                    <br>
        </div>
        <div class="form-group col-12 col-lg-4">
               <div class="col-auto">
                <label>Fecha de nacimiento:</label>
               </div> 
               <div class="col-auto">
                  <input class="form-control @error('fechaN') is-invalid @enderror" type="date"
                  required   id="fechaN" name="fechaN"  />
                    @error('fechaN')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
               </div>
                <br>
        </div>
        <div class="form-group col-12 col-lg-4">
            <div class="col-auto">
                <label>Edad:</label>
            </div>    
            <div class="col-auto">
                    <input class="form-control @error('edad') is-invalid @enderror" type="text"
                    required   id="edad" name="edad" maxlength="2" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                    @error('edad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>  
                    <br>
        </div>
        <div class="form-group col-12 col-lg-4">
            <div class="col-auto">
                <label>Telefono:</label>
            </div>    
            <div class="col-auto">
                    <input class="form-control @error('edad') is-invalid @enderror" type="text"
                    required   id="telefono" name="telefono" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>  
                    <br>
        </div>
        

        <div class="form-group col-12 col-lg-4">
            <label>Seleccione la promocion escolar:</label> <br>
            <select required name="idpromocion" id="idpromocion" class="form-control" >
                @foreach ($promocion as $itempromocion)
            <option value="{{$itempromocion['idpromocion']}}">{{$itempromocion['nombre']}} </option>
               @endforeach
            </select>
            <br>
        </div>

        <div class="col-12">
            <h4 align="center"> INFORMACION ACADEMICA</h4> <br>
        </div>
        <div class="form-group col-12 col-lg-6">
        <div class="col-auto">
                <label>¿Tiene estudios superiores?:</label>
               </div> 
            <div class="form-check">
                <input class="form-check-input" value="Si" type="radio" name="superiores"
                 id="superiores" onclick="document.getElementById('idEscuela').disabled=false
                                          document.getElementById('idFacultad').disabled=false
                                          document.getElementById('oficio').disabled=true  " />
                <label class="form-check-label" for="superiores">
                   Si
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="No" type="radio" name="superiores"
                 id="superiores" onclick="document.getElementById('idEscuela').disabled=true
                                          document.getElementById('idFacultad').disabled=true
                                          document.getElementById('oficio').disabled=false  ">
                <label class="form-check-label" for="superiores">
                    No
                </label>
            </div>
        </div>

        <div class="form-group col-12 col-lg-6">
            <div class="col-auto">
                <label>Oficio:</label>
            </div>    
            <div class="col-auto">
                    <input disabled class="form-control @error('oficio') is-invalid @enderror" type="text"
                         id="oficio" name="oficio" maxlength="20"  />
                    @error('oficio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>  
                    <br>
        </div>

        <div class="form-group col-12 col-lg-6">
            <label>Seleccione la escuela:</label> <br>
            <select disabled name="idEscuela" id="idEscuela" class="form-control" >
                @foreach ($escuela as $itemescuela)
            <option value="{{$itemescuela['idEscuela']}}">{{$itemescuela['nombreEs']}} </option>
               @endforeach
            </select>
            <br>
        </div>

        <div class="form-group col-12 col-lg-6">
            <label>Seleccione la facultad:</label> <br>
            <select disabled name="idFacultad" id="idFacultad" class="form-control" >
                @foreach ($facultad as $itemfacultad)
            <option value="{{$itemfacultad['idFacultad']}}">{{$itemfacultad['nombreFa']}} </option>
               @endforeach
            </select>
            <br>
        </div>

        </div>
       

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Grabar</button>
        <a href="{{route('cancelar')}}" class="btn btn-danger"> <i class="fas fa-ban"></i> Cancelar</a>
    </form>

</div>
@endsection
