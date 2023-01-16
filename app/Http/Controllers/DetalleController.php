<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\DetalleCargo;
use App\Models\Exalumno;
use DateTime;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const PAGINATION=9;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $detalle=DetalleCargo::where ('estado','=','1')->where('idcargo','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('detalle.index',compact('buscarpor','detalle'));
    }

    public function vertodo(Request $request)
    {
        $buscarpor1 = $request->get('buscarpor1');
        $buscarpor = $request->get('buscarpor');
        if($buscarpor!=''){
            $detalle=DetalleCargo::where ('estado','=','1')->where('idalumno','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);

        }else{
            $detalle=DetalleCargo::where ('estado','=','1')->where('idcargo','like','%'.$buscarpor1.'%')->paginate($this::PAGINATION);

        }
        return view('detalle.ver',compact('detalle','buscarpor','buscarpor1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Object = new DateTime();  
        $fechaAct = $Object->format("d-m-Y"); 
     
        $alumno = Exalumno::where ('estado','=','1')->get();
        $cargo = Cargo::all();
        return view('detalle.create',compact('alumno','cargo','fechaAct'));
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
            'fechains'=> 'required|max:14',
            'monto'=> 'required|max:5'
        ],
        [
            'fechains.required'=> 'Ingrese fecha de inscripcion',
  
            'monto.required'=> 'Ingrese el monto de pago por inscripcion',


        ]
        );
        $detalle = new DetalleCargo();
        $detalle->idalumno=$request->idalumno;
        $detalle->idcargo=$request->idcargo;
        $detalle->fechains=$request->fechains;
        $detalle->monto=$request->monto;
        $detalle->estado=1;
        $detalle->save();
        return redirect()->route('detalle.index')->with('datos','Asignacion realizada con exito...');
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
        $alumno = Exalumno::all();
        $cargo = Cargo::all();
        $detalle=DetalleCargo::findOrFail($id);
        return view('detalle.edit', compact('detalle','alumno','cargo'));
    }

    public function confirmar($id){
        $detalle=DetalleCargo::findOrFail($id);
        return view('detalle.confirmar',compact('detalle'));
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
            'fechains'=> 'required|max:14',
            'monto'=> 'required|max:5'
        ],
        [
            'fechains.required'=> 'Ingrese fecha de inscripcion',
  
            'monto.required'=> 'Ingrese el monto de pago por inscripcion',


        ]
        );
        $detalle=DetalleCargo::findOrFail($id);
        $detalle->idalumno=$request->idalumno;
        $detalle->idcargo=$request->idcargo;
        $detalle->fechains=$request->fechains;
        $detalle->monto=$request->monto;

        $detalle->save();
        return redirect()->route('detalle.index')->with('datos','Asignacion realizada con exito...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle=DetalleCargo::findOrFail($id);
        $detalle-> estado=0;
        $detalle->save();
        return redirect()->route('detalle.index')->with('datos','Registro eliminado...');
    }
}
