<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Transportador extends Model
{
      //use Notifiable;

    
    protected   $table= 'transportador';
    protected   $primaryKey='idtransportador';
    public $timestamps=false;
    
    protected $fillable = [
        'cedula', 'nombres', 'apellidos','telefono','direccion',
    ];

    public function user()
    {
        return $this->belongsTo('sisVentas\User','idusuario');
    }
    

       public function asignacion(){

         return $this->hasMany('sisVentas\Asignacion');

      }

}
