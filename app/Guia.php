<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    

   	protected  $table= 'guia_manual';
   	protected  $primaryKey = 'idguia_manual';
   	public $timestamps = false;


   	protected $fillable = [

   		'remision','valor_declarado','flete','valor_neto',
   		'seguro','tipo_remesa','forma_pago','idtercero','origen','destino'

   	];

   	public function tercero(){

   		return $this->belongsTo('sisVentas\Tercero','idtercero');
   	}


   	public function zona(){

   		return $this->belongsTo('sisVentas\Zona','origen');
   	}


   	public function zona1(){

   		return $this->belongsTo('sisVentas\Zona','destino');
   	}


      public function asignacion(){

         return $this->hasMany('sisVentas\Asignacion');

      }

}
