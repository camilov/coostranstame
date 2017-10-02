<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
     //use Notifiable;

    
    protected   $table= 'tercero';
    protected   $primaryKey='idtercero';
    public $timestamps=false;
    
    protected $fillable = [
        'cedula', 'ciudad', 'nombre','apellido','idusuario','nit','celular','direccion','correo'
    ];

    public function user()
    {
        return $this->belongsTo('sisVentas\User','idusuario');
    }
    
     public function guia()
    {
        return $this->hasMany('sisVentas\Guia');
    }

 
}
