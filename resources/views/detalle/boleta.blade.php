<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>BOLETA</title>
<style>
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
        <div>
            <table id="datos">
                <thead>
                    <tr>
                        <td class="proveedor">
                            <h3>DATOS DEL ADMINISTRADOR</h3>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="proveedor">
                            <p>Nombre: {{ Auth::user()->name }}<br>
                                Email: {{ Auth::user()->email }}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="fact">
            <p>
                NOTA DE BOLETA<br>
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; {{ $detalle->id_detalle }}
            </p>
            </div>
    </header>
    <br>
    <br>
    <section>
        <div>
            <table id="facproducto" align="center">
                <thead align="center">
                    <tr id="fa">
                        <th align="center">NOMBRES</th>
                        <th align="center">CARGO</th>
                        <th align="center">FECHA DE INSCRIPCION</th>
                        <th align="center">SUBTOTAL(S/)</th>
                    </tr>
                </thead>
                <tbody align="center">
                        <tr>
                            <td align="center">{{ $detalle->alumno->nombres }}
                                {{ $detalle->alumno->apellidos }}</td>
                            <td align="center">{{ $detalle->cargo->descripcion }}</td>
                            <td align="center">{{ $detalle->fechains }}</td>
                            <td align="center">s/. {{ $detalle->monto }}</td>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4">
                            <p align="right">TOTAL PAGAR: &nbsp; </p>
                        </th>
                        <td>
                            <p align="left">S/. {{ number_format($detalle->monto, 2) }}</p>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
    <br>
    <br>
</body>

</html>
