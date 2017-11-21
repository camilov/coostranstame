<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    //
    protected   $table= 'zona';
    protected   $primaryKey='idzona';
    public $timestamps=false;
    
    protected $fillable = [
        'zona' ,'idzona'
    ];

    public function user()
    {
        return $this->belongsTo('sisVentas\User','idusuario');
    }

    public function guia(){

        return $this->hasMany('sisVentas\Guia');
    }


    public function asignacion(){

         return $this->hasMany('sisVentas\Asignacion');

      }

  

}
