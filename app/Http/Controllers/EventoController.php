<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    const PAGINATION=9;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $evento=Evento::where ('estado','=','1')->where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('evento.index',compact('evento','buscarpor'));
    }

    public function vertodo(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $evento=Evento::where ('estado','=','1')->where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view('evento.vertodo',compact('evento','buscarpor'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evento.create');
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

            'nombre'=> 'required|max:60',
        ],
        [

            'nombre.required'=> 'Ingrese nombres del ex alumno',
            'nombre.max'=> 'Maximo 60 caracteres',
        ]
        );
        $evento = new Evento();

        $evento->nombre=$request->nombre;
        $evento->fechaini=$request->fechaini;
        $evento->fechafin=$request->fechafin;
        $evento->costoevento=$request->costoevento;
        $evento->estado=1;
        $evento->save();
        return redirect()->route('evento.index')->with('datos','Registro nuevo guardado...');
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

        $evento=Evento::findOrFail($id);
        return view('evento.edit', compact('evento'));
    }

    public function confirmar($id){
        $evento=Evento::findOrFail($id);
        return view('evento.confirmar',compact('evento'));
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

            'nombre'=> 'required|max:60',
        ],
        [

            'nombre.required'=> 'Ingrese nombres del ex alumno',
            'nombre.max'=> 'Maximo 60 caracteres',
        ]
        );
        $evento =Evento::findOrFail($id);

        $evento->nombre=$request->nombre;
        $evento->fechaini=$request->fechaini;
        $evento->fechafin=$request->fechafin;
        $evento->costoevento=$request->costoevento;
        $evento->estado=1;
        $evento->save();
        return redirect()->route('evento.index')->with('datos','Registro nuevo guardado...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento=Evento::findOrFail($id);
        $evento-> estado=0;
        $evento->save();
        return redirect()->route('evento.index')->with('datos','Registro eliminado...');
    }
    
}
