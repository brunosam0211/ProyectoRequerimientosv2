<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use App\Models\Exalumno;
use App\Models\Facultad;
use App\Models\Promocion;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    const PAGINATION=9;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $exalumno=Exalumno::where ('estado','=','1')->where('dni','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('exalumno.index',compact('exalumno','buscarpor'));
    }

    public function vertodo(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $exalumno=Exalumno::where ('estado','=','1')->where('dni','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('exalumno.vertodo',compact('exalumno','buscarpor'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuela = Escuela::all();
        $facultad = Facultad::all();
        $promocion = Promocion::all();
        return view('exalumno.create',compact('escuela','facultad','promocion'));
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
            'dni'=> 'required|max:8',
            'nombres'=> 'required|max:60',
            'apellidos'=> 'required|max:60',
            'edad'=> 'required|max:2',
            'fechaN'=> 'required|max:14',
            'telefono'=> 'required|max:9'
        ],
        [
            'dni.required'=> 'Ingrese DNI del ex alumno',
            'dni.max'=> 'Maximo 8 caracteres',
            'nombres.required'=> 'Ingrese nombres del ex alumno',
            'nombres.max'=> 'Maximo 60 caracteres',
            'apellidos.required'=> 'Ingrese apellidos del ex alumno',
            'apellidos.max'=> 'Maximo 60 caracteres',
            'edad.required'=> 'Ingrese edad del ex alumno',
            'edad.max'=> 'Maximo 2 caracteres',
            'fechaN.required'=> 'Ingrese fecha de nacimiento del ex alumno',
            'telefono.required'=> 'Ingrese telefono del ex alumno',

        ]
        );
        $exalumno = new Exalumno();
        $exalumno->dni=$request->dni;
        $exalumno->nombres=$request->nombres;
        $exalumno->apellidos=$request->apellidos;
        $exalumno->edad=$request->edad;
        $exalumno->fechaN=$request->fechaN;
        $exalumno->telefono=$request->telefono;
        $exalumno->superiores=$request->superiores;
        $exalumno->idpromocion=$request->idpromocion;

        if ($request->superiores=="Si"){
            $exalumno->oficio="No"; 
            $exalumno->idEscuela=$request->idEscuela;
            $exalumno->idFacultad=$request->idFacultad;
        }else{
            $exalumno->oficio=$request->oficio; 
            $exalumno->idEscuela=41;
            $exalumno->idFacultad=14;
        }
       
       
        $exalumno->estado=1;
        $exalumno->save();
        return redirect()->route('exalumno.index')->with('datos','Registro nuevo guardado...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escuela = Escuela::all();
        $facultad = Facultad::all();
        $promocion = Promocion::all();
        $exalumno=Exalumno::findOrFail($id);
        return view('exalumno.edit', compact('exalumno','escuela','facultad','promocion'));
    }

    public function confirmar($id){
        $exalumno=Exalumno::findOrFail($id);
        return view('exalumno.confirmar',compact('exalumno'));
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
            'dni'=> 'required|max:8',
            'nombres'=> 'required|max:60',
            'apellidos'=> 'required|max:60',
            'edad'=> 'required|max:2',
            'fechaN'=> 'required|max:14',
        ],
        [
            'dni.required'=> 'Ingrese DNI del ex alumno',
            'dni.max'=> 'Maximo 8 caracteres',
            'nombres.required'=> 'Ingrese nombres del ex alumno',
            'nombres.max'=> 'Maximo 60 caracteres',
            'apellidos.required'=> 'Ingrese apellidos del ex alumno',
            'apellidos.max'=> 'Maximo 60 caracteres',
            'edad.required'=> 'Ingrese edad del ex alumno',
            'edad.max'=> 'Maximo 2 caracteres',
            'fechaN.required'=> 'Ingrese fecha de nacimiento del ex alumno',

        ]
        );
        $exalumno = Exalumno::findOrFail($id);
        $exalumno->dni=$request->dni;
        $exalumno->nombres=$request->nombres;
        $exalumno->apellidos=$request->apellidos;
        $exalumno->edad=$request->edad;
        $exalumno->fechaN=$request->fechaN;
        $exalumno->idEscuela=$request->idEscuela;
        $exalumno->idFacultad=$request->idFacultad;

        $exalumno->save();
        return redirect()->route('exalumno.index')->with('datos','Registro actualizado...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exalumno=Exalumno::findOrFail($id);
        $exalumno-> estado='0';
        $exalumno->save();
        return redirect()->route('exalumno.index')->with('datos','Registro eliminado...');
    }
    
}
