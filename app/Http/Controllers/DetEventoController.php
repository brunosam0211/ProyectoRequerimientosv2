<?php

namespace App\Http\Controllers;

use App\Models\DetalleEvento;
use App\Models\Evento;
use App\Models\Exalumno;
use Illuminate\Http\Request;

class DetEventoController extends Controller
{
    const PAGINATION=8;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $inscripcion=DetalleEvento::where ('estado','=','1')->where('id_detalle','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('inscripcion.index',compact('buscarpor','inscripcion'));
    }

    public function vertodo(Request $request)
    {
        $buscarpor1 = $request->get('buscarpor1');
 
        $buscarpor = $request->get('buscarpor');

        if($buscarpor!=''){
            $inscripcion=DetalleEvento::where ('estado','=','1')->where('idalumno','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        }else{
            $inscripcion=DetalleEvento::where ('estado','=','1')->where('idevento','like','%'.$buscarpor1.'%')->paginate($this::PAGINATION); 
        }
        return view('inscripcion.ver',compact('buscarpor','inscripcion','buscarpor1'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = Exalumno::where ('estado','=','1')->get();
        $evento = Evento::where ('estado','=','1')->get();
        return view('inscripcion.create',compact('alumno','evento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'fechains'=> 'required|max:14'
        ],
        [
            'fechains.required'=> 'Ingrese fecha de inscripcion',
        ]
        );
        $evento=Evento::findOrFail($request->idevento);
        $inscripcion = new DetalleEvento();
        $inscripcion->idalumno=$request->idalumno;
        $inscripcion->idevento=$request->idevento;
        $inscripcion->fechains=$request->fechains;
        $inscripcion->cant_entradas=$request->cant_entradas;
        $inscripcion->montototal= $request->cant_entradas * $evento->costoevento;
        $inscripcion->estado=1;
        $inscripcion->save();
        return redirect()->route('inscripcion.index')->with('datos','Asignacion realizada con exito...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Exalumno::where ('estado','=','1')->get();
        $evento = Evento::where ('estado','=','1')->get();
        $inscripcion=DetalleEvento::findOrFail($id);
        return view('inscripcion.edit', compact('inscripcion','alumno','evento'));
    }

    public function confirmar($id){
        $inscripcion=DetalleEvento::findOrFail($id);
        return view('inscripcion.confirmar',compact('inscripcion'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'fechains'=> 'required|max:14'
        ],
        [
            'fechains.required'=> 'Ingrese fecha de inscripcion',

        ]
        );
        $evento=Evento::findOrFail($request->idevento);
        $inscripcion=DetalleEvento::findOrFail($id);
        $inscripcion->idalumno=$request->idalumno;
        $inscripcion->idevento=$request->idevento;
        $inscripcion->fechains=$request->fechains;
        $inscripcion->cant_entradas=$request->cant_entradas;
        $inscripcion->montototal= $request->cant_entradas * $evento->costoevento;

        $inscripcion->save();
        return redirect()->route('inscripcion.index')->with('datos','Asignacion realizada con exito...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscripcion=DetalleEvento::findOrFail($id);
        $inscripcion-> estado=0;
        $inscripcion->save();
        return redirect()->route('inscripcion.index')->with('datos','Registro eliminado...');
    }
}
