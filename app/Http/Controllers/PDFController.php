<?php

namespace App\Http\Controllers;

use App\Models\DetalleCargo;
use App\Models\DetalleEvento;
use App\Models\Exalumno;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use phpDocumentor\Reflection\DocBlock\Tags\Example;

class PDFController extends Controller
{

    public function pdfalumnos(){
        $exalumno=Exalumno::where ('estado','=','1')->get();

        $pdf = PDF::loadView('exalumno.pdf',['exalumno'=>$exalumno]);
        return $pdf->stream();
    }
    public function pdfcargos(){
        $detalle=DetalleCargo::where ('estado','=','1')->get();

        $pdf = PDF::loadView('detalle.pdf',['detalle'=>$detalle]);
        return $pdf->stream();
    }

    public function uncargo($id){
        $detalle=DetalleCargo::findOrFail($id);
        $pdf = app('dompdf.wrapper');
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);
        $Object = new DateTime();  
        $DateAndTime = $Object->format("d-m-Y"); 
        $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
        $pdf = PDF::loadView('detalle.boleta',['detalle'=>$detalle,'DateAndTime'=>$DateAndTime]);

        return $pdf->stream();
    }

    public function pdfinscripciones(){
        $inscripcion=DetalleEvento::where ('estado','=','1')->get();

        $pdf = PDF::loadView('inscripcion.pdf',['inscripcion'=>$inscripcion]);
        return $pdf->stream();
    }

    public function unainscripcion($id){
        $inscripcion=DetalleEvento::findOrFail($id);
        $pdf = app('dompdf.wrapper');
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);
        $Object = new DateTime();  
        $DateAndTime = $Object->format("d-m-Y"); 
        $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
        $pdf = PDF::loadView('inscripcion.boleta',['inscripcion'=>$inscripcion,'DateAndTime'=>$DateAndTime]);

        return $pdf->stream();
    }
    
}
