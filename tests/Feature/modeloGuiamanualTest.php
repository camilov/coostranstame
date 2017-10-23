<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class modeloGuiamanualTest extends TestCase
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

    public function testGuiaManual()
	{
    // Make call to application...

    	$this->assertDatabaseMissing('guia_manual', [
	    	'idguia_manual'=>13,
	    	'remision'=>1212,
	    	'valor_declarado'=>10022,
	    	'flete'=>132,
	    	'valor_neto'=>132,
	    	'idtercero'=>8,
	    	'seguro'=>1231,
	    	'tipo_remesa'=>'remesa',
	    	'forma_pago'=>'contado',
	    	'origen'=>'bogota',
	    	'destino'=>'pereira',

    	]);
    }
}
