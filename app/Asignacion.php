<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    

    protected $table='asignacion';
    protected $primaryKey = 'idasignacion';
    public $timestamps = false;
    protected $guarded = array();


     protected $fillabe=[
     		'idzona,','idtransportador','idguia'
     ];



     public function transportador(){

   		return $this->belongsTo('sisVentas\Transportador','idtransportador');
   	}


   	public function zona(){

   		return $this->belongsTo('sisVentas\Zona','idzona');
   	}


   	public function guia(){

   		return $this->belongsTo('sisVentas\Guia','idguia');
   	}

   	public function cuadre(){

   		return $this->hasMany('sisVentas\Cuadre');
   	}
}
