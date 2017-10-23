<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class modeloTerceroTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testTercero()
	{
    // Make call to application...

    	$this->assertDatabaseMissing('tercero', [
	    	'idtercero' =>19,
	        'cedula' => 12313,
	        'ciudad' => 'Pereira',
	        'nombre' => 'Carla',
	        'apellido'=>'villegas',
	        'idusuario'=>'30',
	        'nit'=>12123,
	        'celular'=>314254535,
	        'direccion'=>'cra 6#3-22',
	        'correo'=>'carla@gmail.com',
    	]);
    }
}
