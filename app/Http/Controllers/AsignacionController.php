<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Guia;
use sisVentas\Transportador;
use sisVentas\Zona;
use sisVentas\Asignacion;
use sisVentas\http\controllers\controller;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacion = Asignacion::orderBy('idasignacion','ASC')->paginate(5);
        
        $asignacion->each(function($asignacion){
            $asignacion->transportador;
            $asignacion->zona;
            $asignacion->guia;
            $asignacion->transporta;
        });
        
        
        return view('asignacion.index')->with('asignacion',$asignacion);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportador = Transportador::select('nombres','idtransportador')->pluck('nombres','idtransportador');
        $zona = Zona::select('zona','idzona')->pluck('zona','idzona');
        $guia = Guia::select('remision','idguia_manual')->pluck('remision','idguia_manual');
        return view('asignacion.create')->with('transportador',$transportador)
                                  ->with('zona',$zona)
                                  ->with('guia',$guia);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignacion= new Asignacion($request->all());
        $asignacion->save();
        $request->session()->flash('mensaje', 'Asignacion hecha');
        return redirect()->route('asignacion.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asignacion = Asignacion::findOrFail($id);
        $asignacion->delete();
        session()->flash('message',  'La Asignacion '.$asignacion->idasignacion. ' ha sido eliminada.');
        return redirect()->route('asignacion.index');
    }
}
