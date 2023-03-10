<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTA DE CARGOS ASIGNADOS</title>
</head>
<style>
    @page {
        margin: 160px 50px;
    }

    header {
        position: fixed;
        left: 0px;
        top: -160px;
        right: 0px;
        height: 100px;
        background-color: aquamarine;
        text-align: center;
    }

    header h1 {
        margin: 10px 0;
    }

    header h2 {
        margin: 0 0 10px 0;
    }

    footer {
        position: fixed;
        left: 0px;
        bottom: -50px;
        right: 0px;
        height: 40px;
        border-bottom: 2px solid #ddd;
    }

    footer .page:after {
        content: counter(page);
    }

    footer table {
        width: 100%;
    }

    footer p {
        text-align: right;
    }

    footer .izq {
        text-align: left;
    }
    body {
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
    }

    #encabezado {
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        font-size: 15px;
    }

    #fact {
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        background: #33AFFF;
        padding: 0 20px;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #facliente {
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #fac,
    #fv,
    #fa {
        color: #FFFFFF;
        font-size: 15px;
    }

    #facliente thead {
        padding: 20px;
        background: #33AFFF;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #facvendedor {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facvendedor thead {
        padding: 20px;
        background: #33AFFF;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #facproducto {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facproducto thead {
        padding: 20px;
        background: #33AFFF;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #proveedor {
        text-align: justify;
    }
</style>
<body>
    <header>
        <h1>LISTA DE ASIGNACIONES</h1>
    </header>
    <section>
        <div>
            <table id="facproducto">
                <thead>
                    <tr id="fa">
                        <th align="center">ID</th>
                        <th align="center">Ex-alumno</th>
                        <th align="center">Cargo</th>
                        <th align="center">Fecha de inscripcion</th>
                        <th align="center">Monto</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($detalle) <= 0)
                        <tr>
                            <td colspan="3"> Aun no se asignan cargos</td>
                        </tr>
                    @else
                        @foreach ($detalle as $itemdetalle)
                            <tr>

                                <td align="center">{{ $itemdetalle->id_detalle }}</td>
                                <td align="center">{{ $itemdetalle->alumno->nombres }}
                                    {{ $itemdetalle->alumno->apellidos }}</td>
                                <td align="center">{{ $itemdetalle->cargo->descripcion }}</td>
                                <td align="center">{{ $itemdetalle->fechains }}</td>
                                <td align="center">s/ {{ $itemdetalle->monto }}</td>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
    <footer>
        <table>
            <tr>
                <td>
                    <p class="izq">
                        Proyecto Sistemas de Ex-Alumnos
                    </p>
                </td>
                <td>
                    <p class="page">
                        P??gina
                    </p>
                </td>
            </tr>
        </table>
    </footer>
</body>

</html>
