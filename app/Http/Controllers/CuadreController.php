<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Guia;
use sisVentas\Tercero;
use sisVentas\Zona;
use sisVentas\Cuadre;
use sisVentas\Asignacion;
use sisVentas\http\controllers\controller;
use sisVentas\http\controllers\ExcelController;
use DB;
use PDF;
use Excel;
use Carbon\Carbon;
    
class CuadreController extends Controller
{
    
   


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                   
                $fecha1;
                $fecha2;
                $zona;

                //trayendo objeto de cuadre con todos los atributos guardados en store  
                 $guia =Cuadre::orderBy('idcuadre','ASC')->paginate(5);
                    foreach($guia as $guias){
                           $id = $guias->idcuadre;
                           $zona = $guias->idzona;
                           $fecha1 = $guias->fechainicial;
                           $fecha2 = $guias->fechafinal;      
                    }         
                 /*consulta para borrar los registros a la hora de darle al boton cerrar */
                //  $fechacierre =DB::delete('delete  from asignacion where idzona='.$zona.
                  //                      ' and ts between '.$fecha1.' and '.$fecha2);
                
                /*Consulta de zona pereira*/
                /*   $cua = DB::select('select forma_pago ,sum(valor_neto) as s 
                                         FROM asignacion as a,
                                         guia_manual as b
                                         where b.idguia_manual = a.idguia and
                                         idzona='.$zona. 
                                         ' GROUP by forma_pago');*/
                   
                //consulta para traer el numero de la remision la forma de pago y el valor neto de cada zona para el cierre
                   $resumen =  DB::select('select remision,forma_pago,valor_neto
                                         FROM guia_manual g,
                                         asignacion a WHERE a.idguia = g.idguia_manual and idzona='.$zona);
                   
                   /*Consulta de zona bogota*/
                 /*  $bog2 = DB::select('select forma_pago,sum(valor_neto) as s
                                         FROM asignacion as a,
                                         guia_manual as b
                                         where b.idguia_manual = a.idguia and
                                         idzona='.$zona.'  
                                         GROUP by forma_pago');*/



                if($request->has('descargar')){
                    
                    $pdf = PDF::loadView('vista-html-pdf',compact('zona','resumen'));
                    return $pdf->stream('reporte.pdf');
                }
                /*
                if($request->has('descargar2')){

                        $excel=  Excel::create('Resumen-Guias', function($excel) use($resumen,$zona) {
                         
                            $guia = Guia::select('tipo_remesa');
                            $excel->sheet('Resumen-Guias', function($sheet) use($resumen,$zona) {
                                $sheet->loadView('excel')->with('resumen', $resumen)->with('zona',$zona);});
                        })->export('xlsx');
                }*/
                    
                  if($zona=='12'){
                    return view('cuadre.index')->with('resumen', $resumen)->with('zona',$zona);
                    }
                    elseif ($zona=='13') {
                      return view('cuadre.index')->with('resumen', $resumen)->with('zona',$zona);
                        }      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $dt1 = Carbon::now();
        $zona= Zona::select('zona','idzona')->pluck('zona','idzona');
        return view('cuadre.create')->with('zona',$zona)->with('dt1',$dt1);
                                  
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
        $request->session()->flash('mensaje', 'Zona Cargada');
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
        $fecha1;
        $fecha2;
        $zona;

        $cuadre = Cuadre::findOrFail($id);

                //trayendo objeto de cuadre con todos los atributos guardados en store  
                 //$guia =Cuadre::orderBy('idcuadre','ASC')->paginate(5);
                    foreach($cuadre as $cuadres){
                           $zona = $cuadres->idzona;
                           $fecha1 = $cuadres->fechainicial; 
                           $fecha2 = $cuadres->fechafinal;
                    }
                 /*consulta para borrar los registros a la hora de darle al boton cerrar */
                  $fechacierre =DB::select('select * from asignacion where idzona='.$zona.
                                        ' and ts between '.$fecha1.' and '.$fecha2 );
        $fechacierre->delete();
        //session()->flash('message',  'Usuario '.$user->name. ' ha sido eliminado.');
        return redirect()->route('cuadre.index');
    }
}
