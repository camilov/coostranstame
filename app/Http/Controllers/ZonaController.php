<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Zona;
use sisVentas\User;
//use sisVentas\http\requests\UserRequest;
use sisVentas\http\controllers\controller;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zona =Zona::orderBy('idzona','ASC')->paginate(5);
        $zona->each(function($zona){
            $zona->user;
        });
        return view('zona.index')->with('zona',$zona);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zona =new Zona($request->all());
        $zona->idusuario=\Auth::user()->ID;
        
        $zona->save();
        $request->session()->flash('mensaje', 'Zona Creada Con exito');
        return redirect()->route('zona.index');
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
        $zonas = Zona::findOrFail($id);
        $zonas->delete();
        session()->flash('message',  'La zona '.$zonas->zona. ' ha sido eliminada.');
        return redirect()->route('zona.index');
    }
}
