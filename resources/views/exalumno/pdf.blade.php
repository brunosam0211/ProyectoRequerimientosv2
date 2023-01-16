<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de ex-alumnos en el sistema</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>
<body>
  <div class="container-fluid">

  <div class="row">

  <div class="col-12" align="right" style="font-size: 9;">
      Administrador encargado: {{ Auth::user()->name }}
  </div>

    <div class="col-12">
      <br><br>
        <h1 align="center"> Lista de ex-alumnos registrados</h1>
           <br><br>
    </div>
  </div>


<table class="table" border="2">
    <thead style="background-color: #2B2D3E; color:aliceblue" >
      <tr>
      <td align="center">CODIGO <br></td>
        <td align="center">DNI <br></td>
        <td  align="center">NOMBRES Y APELLIDOS <br></td>
        <td  align="center">FECHA NACIMIENTO <br></td>
        <td  align="center">TELEFONO <br> </td>
        <td  align="center">PROMOCION ESCOLAR <br> </td>
        <td  align="center">OCUPACION <br> </td>

      </tr>
    </thead>
    <tbody style="background-color: #0083E8; color:aliceblue">
      <br>
    @if (count($exalumno)<=0)
          <tr>
            <td colspan="3"> No hay registros</td>
          </tr>
      @else
        @foreach($exalumno as $itemexalumno)
        <tr>
        
        <td align="center">{{$itemexalumno->idalumno}}</td>
        <td align="center">{{$itemexalumno->dni}}</td>
        <td align="center">{{$itemexalumno->nombres}} {{$itemexalumno->apellidos}} </td>
        <td align="center">{{$itemexalumno->fechaN}}</td>
        <td align="center">{{$itemexalumno->telefono}}</td>
        <td align="center">{{$itemexalumno->promocion->nombre}} años</td>
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
  </div>

</body>

</html>