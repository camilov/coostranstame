<?php

namespace sisVentas;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected   $table='usuario';
    protected   $primaryKey='ID';
    public      $timestamps=false;
    
    protected $fillable = [
        'name', 'email', 'password','tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function tercero(){

        return $this->hasMany('sisVentas\Tercero');
    }

     public function zona(){

        return $this->hasMany('sisVentas\Zona');
    }


     public function transportador(){

        return $this->hasMany('sisVentas\Transportador');
    }

    public function admin(){

        return $this->type === 'admin';

    }
}
