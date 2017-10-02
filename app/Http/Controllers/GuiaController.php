<?php

namespace sisVentas\Http\Controllers;
use sisVentas\Guia;
use sisVentas\Tercero;
use sisVentas\Zona;
use Illuminate\Http\Request;
use sisVentas\http\controllers\controller;


class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     

        $guia =Guia::orderBy('idguia_manual','ASC')->paginate(5);
        
        $guia->each(function($guia){
            $guia->tercero;
            $guia->zona;
            $guia->zona1;
        });
        
        
        return view('guia.index')->with('guia',$guia);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tercero = Tercero::select('nombre','idtercero')->pluck('nombre','idtercero');
        $zona = Zona::select('zona','idzona')->pluck('zona','idzona');
        $zona1 = Zona::select('zona','idzona')->pluck('zona','idzona');
        return view('guia.create')->with('tercero',$tercero)
                                  ->with('zona',$zona)
                                  ->with('zona1',$zona1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guia= new Guia($request->all());
        $guia->save();
        $request->session()->flash('mensaje', 'Guia Creada Con exito');
        return redirect()->route('guia.index');
    }

    /*
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
        $guia = Guia::findOrFail($id);
        $guia->delete();
        session()->flash('message',  'La guia con remision '.$guia->remision. ' ha sido eliminada.');
        return redirect()->route('guia.index');
        
    }
}
