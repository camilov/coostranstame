<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class modeloTransportadorTest extends TestCase
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


    public function testTransportador()
	{
    // Make call to application...

    	$this->assertDatabaseMissing('transportador', [
	    	'idtransportador' => 8,
	        'cedula' => 12313,
	        'nombres' => 'Carlos',
	        'apellidos' => 'rivera',
	        'telefono'=>131341,
	        'direccion'=>'cra 6 # 3-22',
	        'idusuario'=>'30'
    	]);
    }
}
