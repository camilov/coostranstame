<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Guia;
use sisVentas\Tercero;
use sisVentas\Zona;
use sisVentas\Cuadre;
use sisVentas\Asignacion;
use sisVentas\http\controllers\controller;
use DB;

class CuadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $cuadre = Cuadre::orderBy('idcuadre', 'ASC');
       //dd($cuadre);
        
        $zona = DB::select('select count(idzona) as zona
                            from asignacion
                            where idzona="12"');
        $zona2 = DB::select('select count(idzona) as zona
                            from asignacion
                            where idzona="13"');
        $contado = DB::select('select count(forma_pago) as contado
                            from guia_manual
                            where forma_pago="contado"');
        $contra = DB::select('select count(forma_pago) as contra
                            from guia_manual
                            where forma_pago="contra_entrega"');
        return view('cuadre.index')->with('zona',$zona)->with('contado',$contado)->with('contra',$contra);
        

        //return view('cuadre.index2')->with('zona2',$zona2)->with('contado',$contado)->with('contra',$contra);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zona= Zona::select('zona','idzona')->pluck('zona','idzona');
        return view('cuadre.create')->with('zona',$zona);
                                  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuadre= new Cuadre($request->all());
        $cuadre->save();
        $request->session()->flash('mensaje', 'Zona Cerrada Con exito');
        return redirect()->route('cuadre.index');
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
        //
    }
}
