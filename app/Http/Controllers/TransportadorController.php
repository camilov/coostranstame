<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Transportador;
use sisVentas\User;
//use sisVentas\http\requests\UserRequest;
use sisVentas\http\controllers\controller;

class TransportadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportador =Transportador::orderBy('idtransportador','ASC')->paginate(5);
        $transportador->each(function($transportador){
            $transportador->user;
        });
    

     return view('transportador.index')->with('transportador',$transportador);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $transportador=new Transportador($request->all());
        $transportador->idusuario=\Auth::user()->ID;
        $transportador->save();
        $request->session()->flash('mensaje', 'transportador Creado Con exito');
        
        return redirect()->route('transportador.index');
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
        
        $transportadores = Transportador::findOrFail($id);
        $transportadores->delete();
        session()->flash('message',  'El transportador/a '.$transportadores->transportador. ' ha sido eliminado/a.');
        return redirect()->route('transportador.index');
    }
}
