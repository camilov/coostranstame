<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Cuadre extends Model
{
   protected $table ='cuadre';
   protected $primaryKey = 'idcuadre';
   public $timestamps = false;
   protected $guarded = array();

   protected $fillable =[

   		'asignacion'
   ];


   public function zona(){

   		return $this->belongsTo('sisVentas\Zona','asignacion');
   }
}
