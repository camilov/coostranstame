<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Tercero;
use sisVentas\User;
//use sisVentas\http\requests\UserRequest;
use sisVentas\http\controllers\controller;

class TerceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tercero =Tercero::orderBy('idtercero','ASC')->paginate(5);
        $tercero->each(function($tercero){
            $tercero->user;
        });
        return view('tercero.index')->with('tercero',$tercero);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tercero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tercero=new Tercero($request->all());
        $tercero->idusuario=\Auth::user()->ID;
        $tercero->save();
         $request->session()->flash('mensaje', 'Tercero Creado Con exito');
        return redirect()->route('tercero.index');
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
        $tercero = Tercero::findOrFail($id);
        $tercero->delete();
        session()->flash('message',  'El tercero '.$tercero->nombre. ' ha sido eliminado.');
        return redirect()->route('tercero.index');
        
    }
}
